<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table ='teams';
    public $incrementing = false;
    protected $fillable = [
      'name'
  ];

  

    public function team(){
        return $this->hasMany('App\Models\propertyTracker', 'id');
        
      }


      
}
