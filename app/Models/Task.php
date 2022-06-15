<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function owner(){
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer\Customer');
    }

    public function lead(){
        return $this->belongsTo('App\Models\Leads\Lead');
    }

}
