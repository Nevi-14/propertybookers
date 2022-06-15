<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function contact(){
        return $this->belongsTo('App\Models\Contact\Contact');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer\Customer');
    }

    public function currency(){
        return $this->belongsTo('App\Models\Currency');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'invoice_owner_id');
    }

    public function invoiceProducts(){
        return $this->hasMany('App\Models\InvoiceProduct');
    }

    public function payment_mode(){
        return $this->belongsTo('App\Models\PaymentMode');
    }

}
