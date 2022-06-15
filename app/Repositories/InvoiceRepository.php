<?php

namespace App\Repositories;

use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;

class InvoiceRepository
{
    /**
     * @var invoice
     */
    protected $invoice;

    /**
     * @InvoiceRepository Constructory
     */
    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }
    
    public function getTotalInvoicesCount(){
        $query = Invoice::query();
        if (Auth::user()->role_id != 1) {
            $query = $query->where('invoice_owner_id','=',Auth::user()->id)->orWhere('created_by_id','=',Auth::user()->id);
        }
        return $query->count();
    }

    /**
     * GET Total Paid Invoices
     */
    public function getTotalPaidInvoicesCount(){
        $query = Invoice::where('invoice_paid','=','yes');
        if (Auth::user()->role_id != 1) {
            $query = $query->where('invoice_owner_id','=',Auth::user()->id)->orWhere('created_by_id','=',Auth::user()->id);
        }
        return $query->count();
    }

    /**
     * Get Avg of Total Paid Invoices
     */
    public function getPaidInvoicesAvg(){
        $total_invoices = $this->getTotalInvoicesCount();
        $total_paid_invoices = $this->getTotalPaidInvoicesCount();
        if ($total_invoices > 0) {
            return ($total_paid_invoices*100)/$total_invoices;
        }else{
            return '0';
        }
    }


    /**
     * Get Revenue or Total Amount of Paid Invoices
     */
    public function revenue(){
        $query = Invoice::where('invoice_paid','=','yes');
        if (Auth::user()->role_id != 1) {
            $query = $query->where('invoice_owner_id','=',Auth::user()->id)->orWhere('created_by_id','=',Auth::user()->id);
        }
        return $query->sum('total_amount');        
    }

}

?>