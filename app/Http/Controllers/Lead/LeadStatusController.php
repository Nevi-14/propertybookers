<?php

namespace App\Http\Controllers\Lead;

use App\Models\Leads\LeadStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadStatusController extends Controller
{
    // API ROUTE
    public function getleadStatuses(){
        $leadstatus = LeadStatus::select(['id','name'])->where('name','!=','Won')->orderby('id','desc')->get();
        return response()->json(['leadstatus'=>$leadstatus]);
    }

    // API ROUTE
    public function storeStatus(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required'
        ]);
        if(!$validated){
            return response()->json($validated->errors);
        }else{
           
            $Status = LeadStatus::where('name',$request->name)->first();
            if($Status){
                // if Status not matched
                $notification = array(
                    'message' => __('This Status has already been added, Try some other!'),
                    'status' => 'error'
                );
                return response()->json($notification);
            }else{
                $new_Status = LeadStatus::create(['name'=> $request->name]);
                $notification = array(
                    'message' => __('Status added successfully!'),
                    'status' => 'success',
                    'new_status' => $new_Status
                );
                return response()->json($notification);
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lead_statuses = LeadStatus::all();
        $route_active = 'lead_status';
        $status_ids = response()->json($lead_statuses->modelKeys());
        return view('crm.lead.status', compact(['route_active', 'lead_statuses','status_ids']));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required'
        ]);
        if($validated){
            $status = LeadStatus::where('name',$request->name)->first();
            if($status){
                // if status not matched
                $notification = array(
                    'message' => __('This Status has already been added, Try some other!'),
                    'alert-type' => 'error'
                );
                return back()->with($notification);
            }else{
                LeadStatus::create(['name'=> $request->name]);
                $notification = array(
                    'message' => __('Status added successfully!'),
                    'alert-type' => 'success'
                );

                if($request->return_to != null && $request->return_to == 'lead'){
                    return redirect(url('lead/status'))->with($notification);
                }
                return redirect(url('lead/status'))->with($notification);
            }

        }else{
            // if not validated
            return back()->withErrors($validated)->withInput();
        }
    }



 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leads\LeadStatus  $leadStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeadStatus $leadStatus)
    {
        if($leadStatus->id == '1'){
            $notification = array(
                'message' => __("You can't update this status of a Won Lead!"),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        $leadStatus->name = $request->name;
        $leadStatus->save();

        $notification = [
            'alert-type'=>'success',
            'message'=>__('Status updated successfully!')
        ];
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leads\LeadStatus  $leadStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeadStatus $leadStatus){
        if($leadStatus->id == '1'){
            $notification = array(
                'message' => __("You can't delete the status of a won lead!"),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        if($leadStatus->delete()){
            $notification = [
                'alert-type'=>'success',
                'message'=>__('Status deleted successfully!')
            ];
            return back()->with($notification);
        }
    }
}
