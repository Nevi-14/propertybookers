<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Currency;
use App\Models\Reminder;
use App\Models\Leads\Lead;
use App\Models\Leads\LeadStatus;
use Illuminate\Support\Facades\Auth;
use App\Services\DashboardAllService;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    protected $dashboardService;
    public function __construct(DashboardAllService $dashboardService)
    {
        $this->middleware('auth');
        $this->dashboardService = $dashboardService;
    }

    public function index()
    {
        $route_active = 'home';
        
        $leads_count = $this->dashboardService->leadsCount();
        $tasks_count = $this->dashboardService->tasksCount();
        $invoice_count = $this->dashboardService->invoiceCount();
        $base_currency = Currency::where(['is_base_currency'=>'yes'])->first();

        // For Graph06
        $total_status_leads = json_encode($this->total_status_leads());

        // For Graph01
        $monthly_leads_recap = json_encode($this->monthly_leads_recap());

        // For Graph05
        $monthly_leads_avg =  json_encode($this->monthly_leads_avg());

        // oldest year = The year when first lead is created.
        $first_lead = Lead::select('created_at')->oldest()->first();
        if($first_lead != null){
            $oldest_year = $first_lead->created_at->format('Y');
        }else{
            $oldest_year = '0';
        }

        $now = Carbon::now();
        $thisYear = $now->isoFormat('YYYY');


        return view('crm.home', compact([
            'route_active',
            'base_currency',
            'leads_count',
            'tasks_count',
            'invoice_count',
            'monthly_leads_recap',
            'total_status_leads',
            'thisYear',
            'oldest_year',
            'monthly_leads_avg'
        ]));
    }


    public function monthly_leads_avg(){
        $now = Carbon::now();
        $thisYear = $now->isoFormat('YYYY');

        $user = Auth::user();
        $user_id = $user->id;
        $total_leads = [];
        $won_leads = [];
        $monthly_leads_avg = [];
        // Total leads
        for ($i=1; $i <= 12; $i++) { 
            $query = Lead::query($user_id);
            $query = $query->whereYear('created_at', $thisYear);
            $query = $query->whereMonth('created_at', '=', $i);
            if ($user->role_id != '1') {
                $query = $query->where(['owner_id'=>$user_id]);
            }
            $total_leads = $query->count();
            $won_leads = $query->where('lead_status_id','=','1')->count();
            if($total_leads != 0){
                $avg_leads = ($won_leads*100)/$total_leads;
                array_push($monthly_leads_avg, $avg_leads);
            }else{
                array_push($monthly_leads_avg, 0);
            }
        }
        return $monthly_leads_avg;
    }

    public function monthly_leads_recap(){
        $now = Carbon::now();
        $thisYear = $now->isoFormat('YYYY');
        $monthly_leads_recap = [];
        $status_leads = [];

        $all_lead_status_types = LeadStatus::select('id','name')->get();
        foreach ($all_lead_status_types as $status_type) {
            for ($i=1; $i <= 12; $i++) { 
                $query = Lead::where('lead_status_id','=',$status_type->id);
                $query = $query->whereYear('created_at', $thisYear);
                $query = $query->whereMonth('created_at', '=', $i);
                if (Auth::user()->role_id != '1') {
                    $query = $query->where(['owner_id'=>Auth::user()->id]);
                }
                $leads = $query->count();
                array_push($status_leads, $leads);
            }
            $monthly_leads_recap[$status_type->name] = $status_leads;
            $status_leads = [];
        }

        return $monthly_leads_recap;
    }    

    public function total_status_leads(){
        $total_status_leads = [];
        $all_lead_status_types = LeadStatus::select('id','name')->get();
        foreach ($all_lead_status_types as $status_type) {
                $query = Lead::where('lead_status_id','=',$status_type->id);
                if (Auth::user()->role_id != '1') {
                    $query = $query->where(['owner_id'=>Auth::user()->id]);
                }
                $leads = $query->count();
            $total_status_leads[$status_type->name] = $leads;
        }
        return $total_status_leads;        
    }

}
