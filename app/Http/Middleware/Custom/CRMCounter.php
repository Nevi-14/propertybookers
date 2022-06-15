<?php

namespace App\Http\Middleware\Custom;

use Closure;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Proposal;
use App\Models\Reminder;
use App\Models\Leads\Lead;
use App\Models\SingleRowData;
use App\Models\Customer\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CRMCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Schema::hasTable('users') || 
            !Schema::hasTable('customers') || 
            !Schema::hasTable('leads') || 
            !Schema::hasTable('products') || 
            !Schema::hasTable('proposals') || 
            !Schema::hasTable('invoices')
        ) {
            session(['total_users' => '', 'total_customers'=>'', 'total_leads'=>'', 'total_products'=>'', 'total_proposals'=>'', 'total_invoices'=>'']);
            return $next($request);
        }
        $users = User::where('id','!=','1')->count();
        $customers = Customer::count();
        $leads = Lead::where(function($query){
            if(Auth::user()->role->name != 'admin'){
                $query->where('user_id', Auth::user()->id)->orWhere('owner_id', Auth::user()->id);
            }
        })->count();
        $products = Product::where(function($query){
            if(Auth::user()->role->name != 'admin'){
                $query->where('created_by_id', Auth::user()->id);
            }
        })->count();
        $proposals = Proposal::where(function($query){
            if(Auth::user()->role->name != 'admin'){
                $query->where('created_by_id', Auth::user()->id);
            }
        })->count();
        $invoices = Invoice::where(function($query){
            if(Auth::user()->role->name != 'admin'){
                $query->where('created_by_id', Auth::user()->id);
            }
        })->count();
        $logo = SingleRowData::where('field_name','logo_file')->first();

        if($logo != null){
            $logo_file = $logo->field_value;
        }else{
            $logo_file = '';
        }
 
        session(['total_users' => $users, 'total_customers'=>$customers, 'total_leads'=>$leads, 'total_products'=>$products, 'total_proposals'=>$proposals, 'total_invoices'=>$invoices, 'logo_file'=>$logo_file ]);

        // if LoggedIn user is a client/customer
        if (session('client_id') != null) {
            $proposals = Proposal::where('customer_id',session('client_id'))->count();
            $invoices = Invoice::where('customer_id',session('client_id'))
            ->where('status','!=','draft')
            ->count();
            session(['customer_proposals'=>$proposals, 'customer_invoices'=>$invoices,]);
        }
        
        $user = Auth::user();
        if( Session::get('reminders') == null || Session::get('refresh') == true){
            $today = date('Y-m-d');
            $query = Reminder::select(['id','description','time'])->where('user_id', $user->id)
            ->whereDate('date', $today);
            $todays_reminders_count = $query->count();
            $todays_reminders = $query->get();
            $reminders_cookie = json_encode([
                'todays_reminders_count' => $todays_reminders_count,
                'todays_reminders' => $todays_reminders
            ]);
            Session::put('reminders',$reminders_cookie);
            Session::put('refresh', false);
        }


        return $next($request);
    }
}
