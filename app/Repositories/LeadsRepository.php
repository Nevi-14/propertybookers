<?php

namespace App\Repositories;

use App\Models\Leads\Lead;
use Illuminate\Support\Facades\Auth;

class LeadsRepository
{
    /**
     * @var lead
     */
    protected $lead;

    /**
     * @LeadsRepository Constructory
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function getTotalLeadsCount(){
        $query = Lead::query();
        if (Auth::user()->role_id != 1) {
            $query = $query->where('owner_id','=',Auth::user()->id);
        }
        return $query->count();
    }

    public function getTotalWonLeadsCount(){
        $query = Lead::where('lead_status_id','=','1');
        if (Auth::user()->role_id != 1) {
            $query = $query->where('owner_id','=',Auth::user()->id);
        }
        return $query->count();
    }

    public function getWonLeadsAvg(){
        $total_leads = $this->getTotalLeadsCount();
        $total_won_leads = $this->getTotalWonLeadsCount();
        if ($total_leads > 0) {
            return ($total_won_leads*100)/$total_leads;
        }else{
            return '0';
        }
    }
}

?>