<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class propertyTracker extends Model
{
    use HasFactory, Notifiable;

    protected $table ='property_tracker';
    protected $guarded = [];

    public function teams(){
        return $this->belongsTo('App\Models\Team','team_id');
      }
      public function files(){
        return $this->hasMany('App\Models\FileUpload','property_tracker_id');
      }

      public function agent(){
        return $this->belongsTo('App\Models\User','sales_agent_id');

      }
      public function appointment(){
        return $this->hasMany('App\Models\appointment' ,'property_tracker_id');
    }


      public function status(){
        return $this->belongsTo('App\Models\status', 'status_id');
      }

      public function acquisitonmanager(){
        return $this->belongsTo('App\Models\User', 'acquisition_manager_id');
    }

    public function propertyowner(){
      return $this->belongsTo('App\Models\PropertyOwner','property_owner_id');

      }
      

      public function notes(){
        return $this->hasMany('App\Models\propertyTrackerNotes', 'property_tracker_id');
        
      }

 
}
