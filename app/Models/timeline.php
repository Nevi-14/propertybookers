<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeline extends Model
{
    use HasFactory;
    protected $table ='timelines';
    protected $guarded = [];


    public function timeline(){
        return $this->belongsTo('App\Models\PropertyDetail','id');
  
        }
}
