<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function status(){
        return $this->hasMany('App\Models\propertyTracker', 'id');
    }
  
}
