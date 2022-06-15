<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];


    public function propertystate(){
        return $this->hasMany('App\Models\PropertyDetail', 'state_id');
        
      }


}
