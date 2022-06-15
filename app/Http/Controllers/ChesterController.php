<?php

namespace App\Http\Controllers;

use App\Models\chester;
use App\Models\timeline;
use App\Models\FileUpload;
use App\Models\PropertyOwner;
use App\Models\PropertyDetail;
use App\Models\ChesterTrackerNotes;
use DateTime;
use Carbon\Carbon;
use App\Models\City;
use App\Models\Note;
use App\Models\Task;
use App\Models\User;
use App\Models\Media;
use App\Models\State;
use App\Models\Team;
use App\Models\status;
use App\Models\OnceHub;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Language;
use App\Models\Proposal;
use App\Models\Reminder;
use App\Models\Leads\Lead;
use App\Models\ActivityLog;
use App\Imports\LeadsImport;
use Illuminate\Http\Request;
use App\Models\WebToLeadForm;
use App\Models\Address\Address;
use App\Models\Contact\Contact;
use App\Models\Leads\LeadSource;
use App\Models\Leads\LeadStatus;
use App\Models\SocialMediaField;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Contact\ContactTitle;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ChesterController extends Controller
{


    

    function sort(Request $request, $query_data)
    {
        $now = Carbon::now();
        if($request->date_sort == 'today')
        {
            $today = Carbon::today()->toDateString();
            $query_data = $query_data->whereDate('created_at','=',$today);
        }
        elseif($request->date_sort == 'yesterday'){
            $yesterday = Carbon::yesterday()->toDateString();
            $query_data = $query_data->whereDate('created_at','=',$yesterday);                
        }
        elseif($request->date_sort == 'this_week'){
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            $query_data = $query_data->whereDate('created_at','>=',$weekStartDate);     
            $query_data = $query_data->whereDate('created_at','<=',$weekEndDate);     
        }  
        elseif($request->date_sort == 'last_week'){
            $subWeek = $now->subWeek();
            $lastWeekStartDate = $subWeek->startOfWeek()->format('Y-m-d H:i');
            $lastWeekEndDate = $subWeek->endOfWeek()->format('Y-m-d H:i');
            $query_data = $query_data->whereDate('created_at','>=',$lastWeekStartDate);     
            $query_data = $query_data->whereDate('created_at','<=',$lastWeekEndDate); 
        } 
        elseif($request->date_sort == 'this_month'){
            $startOfMonth = $now->startOfMonth()->toDateString();
            $endOfMonth = $now->endOfMonth()->toDateString();
            $query_data = $query_data->whereDate('created_at','>=',$startOfMonth);     
            $query_data = $query_data->whereDate('created_at','<=',$endOfMonth); 
        } 
        elseif($request->date_sort == 'last_month'){
            $subMonth = $now->subMonth();
            $startOfMonth = $subMonth->startOfMonth()->toDateString();
            $endOfMonth = $subMonth->endOfMonth()->toDateString();
            $query_data = $query_data->whereDate('created_at','>=',$startOfMonth);     
            $query_data = $query_data->whereDate('created_at','<=',$endOfMonth); 
        } 
        elseif($request->date_sort == 'last_3_months'){
            // For Last 3 months
            $lastOneMonth = $now->subMonth(1);
            $lastOneMonthEnd = $lastOneMonth->endOfMonth()->toDateString();
            $thirdLastMonth =  $now->subMonth(2);
            $thirdLastMonthStart = $thirdLastMonth->startOfMonth()->toDateString();

            $query_data = $query_data->whereDate('created_at','>=',$thirdLastMonthStart); 
            $query_data = $query_data->whereDate('created_at','<=',$lastOneMonthEnd); 
        } 
        elseif($request->date_sort == 'last_6_months'){
            // For Last 6(3+3) months
            $lastOneMonth = $now->subMonth(1);
            $lastOneMonthEnd = $lastOneMonth->endOfMonth()->toDateString();

            $Last6thMonth =  $now->subMonth(6);
            $Last6thMonthStart = $Last6thMonth->startOfMonth()->toDateString();

            $query_data = $query_data->whereDate('created_at','>=',$Last6thMonthStart);     
            $query_data = $query_data->whereDate('created_at','<=',$lastOneMonthEnd); 
        } 
        elseif($request->date_sort == 'this_year'){
            // This Year 1 Jan to 31 Dec
            $thisYearStart = $now->startOfYear(1)->toDateString();
            $thisYearEnd = $now->endOfYear(1)->toDateString();
            $query_data = $query_data->whereDate('created_at','>=',$thisYearStart);     
            $query_data = $query_data->whereDate('created_at','<=',$thisYearEnd); 
        } 
        elseif($request->date_sort == 'last_year'){
            // This Year 1 Jan to 31 Dec
            $lastYear = $now->subYear(1);
            $lastYearStart = $lastYear->startOfYear(1)->toDateString();
            $lastYearEnd = $lastYear->endOfYear(1)->toDateString();
            $query_data = $query_data->whereDate('created_at','>=',$lastYearStart);     
            $query_data = $query_data->whereDate('created_at','<=',$lastYearEnd); 
        } 
        elseif($request->date_sort == 'custom'){
            $dates = explode(' - ', $request->custom_range);
            $query_data = $query_data->whereDate('created_at','>=',$dates[0]);     
            $query_data = $query_data->whereDate('created_at','<=',$dates[1]); 
        } 
        return $query_data;    
    }
    

    
    public function index(Request $request)
    {
        $route_active = 'Property Tracker';
        $user = Auth::user();
        $user_id = $user->id;


        $query_data = chester::query()->with('propertyowner', 'teams', 'agent', 'status', 'acquisitonmanager');


     if ($user->role->id == 1) {

        // New tickets count
        $total = chester::count();
      
              // New tickets count
              $new = chester::where('status_id', 1)->count();

              // Follow up tickets count
              $followUp = chester::where('status_id', 2)->count();
              // In Progress tickets count
              $inProgress = chester::where('status_id', 4)->count();
      
              // Closed tickets count>
              $closed = chester::where('status_id', 6)->count();
              // dd($new);
      
      
       } else {
           

              // Total tickets count
              $total = chester::where('sales_agent_id', $user_id)->count();

              // New tickets count
              $new = chester::where('sales_agent_id',$user_id)->where('status_id', 1)->count();

              // Follow up tickets count
              $followUp = chester::where('sales_agent_id',$user_id)->where('status_id', 2)->count();
              // In Progress tickets count
              $inProgress = chester::where('sales_agent_id',$user_id)->where('status_id', 4)->count();
      
              // Closed tickets count
              $closed = chester::where('sales_agent_id',$user_id)->where('status_id', 6)->count();
              // dd($new);
      
      
      
       }



        //   dd($data);
        if (request()->ajax()) {

// date wise sort leads
$this->sort($request, $query_data);    
if($request->team != null){
    $query_data = $query_data->where('team_id','=',$request->team);
}
if($request->acquisition_id != null){
    $query_data = $query_data->where('acquisition_manager_id','=',$request->acquisition_id);
}
if($request->owner_id != null){
    $query_data = $query_data->where('sales_agent_id', $request->owner_id);
}


if($request->lead_status_id != null){
    $query_data = $query_data->where('status_id','=',$request->lead_status_id);
}




$data = $query_data->get();

return datatables()->of($data)

                ->addColumn('first_name', function (chester $propertyowner) {
                    return $propertyowner->first_name + $propertyowner->last_name;
                })
                ->addColumn('sales_agent', function (chester $agent) {
                    return $agent->first_name;
                })

                ->addColumn('action', function ($lead) {
                    $edit_url = url('/chester/lead/show', $lead->id);
                    $delete_url = url('chester/destroy', $lead->id);
                    $button = '<a class="mr-2 my-2 btn btn-sm btn-primary text-white" href=' . $edit_url . '>
                                <i class="fas fa-edit"></i> ' . __("Edit") . '
                            </a>';
                    $button .= '&nbsp;&nbsp;';

                    $user = Auth::user();
                    $user_id = $user->id;
            
            
              if($user_id == 1){

                $button .= '<a href="#" class="btn btn-sm btn-danger text-white" onclick="confirmDelete(' . $lead->id . ')">
                <i class="fas fa-trash"></i> ' . __('Delete') . ' 
            </a>';
    $button .= '<span id="delbtn' . $lead->id . '"></span>
            <form id="delete-lead-' . $lead->id . '"
                action=' . $delete_url . '
                method="POST">
                ' . method_field("delete") . '
                ' . csrf_field() . '
            </form>';

              }
                    return $button;
                })
                ->rawColumns(['action', 'lead_status', 'lead_id'])
                ->make(true);
        }
        $users = User::where('role_id', '3')->where('status', 'active')->get();
        $statuses = status::all();
        $states = state::all();
        $teams = Team::all();

        return view('crm.chester.index', compact(['total','new', 'followUp', 'inProgress', 'closed', 'route_active', 'users', 'statuses', 'states', 'teams']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route_active = 'show_lead';
        $lead_titles = ContactTitle::get();
        $countries = DB::table('countries')->get();
        $languages = DB::table('languages')->get();
        $industries = DB::table('industries')->get();
        $users = User::where('role_id', '3')->where('status', 'active')->get();
        return view('crm.chester.create', compact(['route_active', 'lead_titles', 'countries', 'languages', 'industries', 'users']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = $request->validate([
            /** Tracker */
            'sales_agent_id' => '',
            'team_id' => '',
            'status_id' => '',
            /** Property Owner  */
            'first_name' => '',
            'last_name' => '',
            'company_name' => '',
            'email' => '',
            'phone' => '',
            /** Property Details  */
            'address' => '',
            'city' => '',
            'state_id' => '',
            'county' => '',
            'zip' => '',
            'beds' => '',
            'baths' => '',
            'sqft' => '',
            'zestimate' => '',
            'zillow_url' => '',
            /** Property Tracker notes  */
            'notes' => '',
        ]);



        //  dd($request->all());

        /** Auth User */
        $user = Auth::user();
        /** Property Owner */
        $owner = PropertyOwner::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);




        /** Property Detail */
        $propertyDetails = PropertyDetail::create([
            'property_owner_id' => $owner->id,
            'address' => $request->address,
            'city' => $request->city,
            'state_id' => $request->state_id,
            'county' => $request->county,
            'zip' => $request->zip,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'sqft' => $request->sqft,
            'zestimate' => $request->zestimate,
            'zillow_url' => $request->zillow_url,
            'asking_price' => 0,
            'max_cash_offer' => 0,
            'condition' => '',
            'motivation' => '',
            'last_sold' => Null,
        ]);
        /** Tracker */
        $lead = chester::create([
            'stage' => 'Lead',
            'team_id' => $request->team_id,
            'sales_agent_id' => $request->sales_agent_id,
            'status_id' => $request->status_id,
            'acquisition_manager_id' => Null,
            'property_owner_id' => $owner->id,
            'created_by' => $user->id,
            'updated_by' => $user->id
        ]);



        if ($request->notes) {



            $leadNote = ChesterTrackerNotes::create([
                'chester_tracker_id' => $lead->id,
                'user_id' => $user->id,
                'notes' => $request->notes,

            ]);
        }
        if ($lead) {
            $notification = array(
                'message' => __('lead added successfully!'),
                'alert-type' => 'success'
            );
            return     redirect(route('chester.show',$lead->id))->with($notification);
        } else {
            $notification = array(
                'message' => __('Please try again!'),
                'alert-type' => 'error'
            );
            
            return back()->with($notification)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chester  $chester
     * @return \Illuminate\Http\Response
     */
    public function show(chester $lead)
    {



      //dd(  $lead->propertyowner->propertydetails->first()->timeline);

        //        foreach($lead->files as $file){

        //          return $file->userfile->name;

        //    }


        $data = chester::where('id', $lead->id)->with('propertyowner', 'teams', 'agent', 'status', 'acquisitonmanager', 'notes')->get();
        $oncehub = OnceHub::where('user_id', 2)->get();
        //dd($lead->acquisitonmanager->oncehub->first()->id);
        //  dd($lead->propertyowner->first_name); |
        $route_active = 'add_lead';
        $lead_titles = ContactTitle::get();
        $countries = DB::table('countries')->get();
        $languages = DB::table('languages')->get();
        $industries = DB::table('industries')->get();
        $users = User::where('role_id', '3')->where('status', 'active')->get();

        $users = User::where('role_id', '3')->where('status', 'active')->get();
        $statuses = status::all();
        $states = state::all();
        $teams = Team::all();




        return view('crm.chester.show', compact(['lead', 'users', 'statuses', 'teams', 'states', 'data', 'route_active', 'lead_titles', 'countries', 'languages', 'industries', 'users']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chester  $chester
     * @return \Illuminate\Http\Response
     */
    public function edit(chester $chester)
    {
     
        $route_active = 'add_lead';
        $lead_titles = ContactTitle::get();
        $countries = DB::table('countries')->get();
        $languages = DB::table('languages')->get();
        $industries = DB::table('industries')->get();
        $users = User::where('role_id', '3')->where('status', 'active')->get();
        return view('crm.chester.show', compact(['route_active', 'lead_titles', 'countries', 'languages', 'industries', 'users']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chester  $chester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chester $lead)
    {

        $validator = $request->validate([
            /** Tracker */

            'sales_agent_id' => '',
            'team_id' => '',
            'status_id' => '',
            'stage' => '',
            /** Property Owner  */
            'first_name' => '',
            'last_name' => '',
            'company_name' => '',
            'email' => '',
            'phone' => '',

            /**Prospect */
            'asking_price' => '',
            'max_cash_offer' => '',
            'motivation' => '',
            'condition' => '',
            'last_sold' => '',
            /** Property Details  */

            'address' => '',
            'city' => '',
            'state_id' => '',
            'county' => '',
            'zip' => '',
            'beds' => '',
            'baths' => '',
            'sqft' => '',
            'zestimate' => '',
            'zillow_url' => '',
            'confirmation' => '',

            /** Property Tracker notes  */

            'app_set' => '',
            'asking_price' => '',
            'notes' => '',
            'acquisition_manager_id' => '',
            'meeting' => '',

            'timeline' => '',
            'timelinenote' => '',

        ]);

       // dd($request->all());
        // dd($request->all());

        /** Auth User */
        $user = Auth::user();



        if ($request->team_id) {
            /** Property Owner */
            $lead->propertyowner->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company_name' => $request->company_name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);






            /** Property Detail */

         $lead->propertyowner->propertyDetails->first()->update([
                'address' => $request->address,
                'city' => $request->city,
                'state_id' => $request->state_id,
                'county' => $request->county,
                'zip' => $request->zip,
                'beds' => $request->beds,
                'baths' => $request->baths,
                'sqft' => $request->sqft,
                'zestimate' => $request->zestimate,
                'zillow_url' => $request->zillow_url,
                'asking_price' => 0,
                'max_cash_offer' => 0,
                'condition' => '',
                'motivation' => '',
                'last_sold' => Null,
            ]);

  


            /** Tracker */

            $lead->update([

                'stage' => 'Prospect',
                'team_id' => $request->team_id,
                'sales_agent_id' => $request->sales_agent_id,
                'status_id' => $request->status_id,
                'acquisition_manager_id' => Null,
                'updated_by' => $user->id
            ]);
        }


        if ($request->confirmation  == 'Y') {

            if ($lead->stage == 'Lead' ||  $lead->stage == 'Prospect') {

                $lead->update([
                    'confirmation' => $request->confirmation,
                    'stage' => 'Opportunity',
                ]);
            }



       $lead->propertyowner->propertydetails->first()->update([
                'asking_price' => $request->asking_price,
                'max_cash_offer' => $request->max_cash_offer,
                'motivation' => $request->motivation,
                'condition' => $request->condition,
                'last_sold' => $request->last_sold
            ]);



    


            if($request->timeline > 0 ){
                $number_of_timelines = count($request->timeline);
                for ($i=0; $i < $number_of_timelines; $i++) { 
                    timeline::create([
                        'property_id'=>$lead->propertyowner->propertydetails->first()->id,
                        'timeline'=>$request->timeline[$i],
                        'timelinenote'=>$request->timelinenote[$i],
    
                    ]);
                }
            }  
    


            if ($request->meeting == 'Y') {

                $lead->update([
                    'meeting' => $request->confirmation
                ]);


                return redirect()->route('oncehub');
            }
        } else {

            $lead->update([
                'confirmation' => 'N'

            ]);
        }




        if ($request->notes) {
            $leadNote = ChesterTrackerNotes::create([
                'chester_tracker_id' => $lead->id,
                'user_id' => $user->id,
                'notes' => $request->notes,

            ]);
        }


        if ($request->app_set) {

            $lead->update([
                'app_set' => $request->app_set,
                'acquisition_manager_id' => $request->acquisition_manager_id,


            ]);
            $lead->propertyowner->propertydetails->first()->update([
                'asking_price' => $request->asking_price,
            ]);

            $leadNote = ChesterTrackerNotes::create([
                'chester_tracker_id' => $lead->id,
                'user_id' => $user->id,
                'notes' => $request->notes,

            ]);
        }
        $notification = array(
            'message' => 'lead updated successfully!',
            'alert-type' => 'success'
        );


        return back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chester  $chester
     * @return \Illuminate\Http\Response
     */
    public function destroy(chester $lead)
    {



        $lead->delete();

        $notification = array(
            'message' => 'El elemento se borro con exito.',
            'alert-type' => 'success'
        );


        return back()->with($notification);
    }
}
