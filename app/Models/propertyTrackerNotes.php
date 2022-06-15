<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertyTrackerNotes extends Model
{
    use HasFactory;
    protected $table ='property_tracker_notes';
    protected $guarded = [];

    public function notes(){
        return $this->belongsTo('App\Models\propertyTracker','id');
  
        }

        public function agent(){
            return $this->belongsTo('App\Models\User','user_id');
      
            }
    
    
}
