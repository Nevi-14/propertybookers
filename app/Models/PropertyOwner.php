<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyOwner extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function propertyowner(){
      return $this->hasMany('App\Models\propertyTracker', 'id');
    }

    public function propertyDetails(){
      return $this->hasMany('App\Models\PropertyDetail', 'property_owner_id');
      
    }



}
