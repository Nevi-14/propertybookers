<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reminder extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User' ,'user_id');
    }

    public function lead(){
        return $this->belongsTo('App\Models\Leads\Lead');
    }
    public function property(){
        return $this->belongsTo('App\Models\Leads\chester');
    }

    public function contact(){
        return $this->belongsTo('App\Models\Contact\Contact');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer\Customer');
    }
}
