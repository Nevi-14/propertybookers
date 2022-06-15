<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
  
    public function propertyowner(){
      return $this->belongsTo('App\Models\PropertyOwner', 'id');
    }


    public function state(){
      return $this->belongsTo('App\Models\State','id');

      }

      public function timeline(){
        return $this->hasMany('App\Models\timeline','property_id');
      }


}
