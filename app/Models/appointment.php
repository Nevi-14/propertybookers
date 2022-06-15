<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $table ='appointments';
    protected $guarded = [];
    public function user(){
        return $this->belongsTo('App\Models\User' ,'id');
    }
    public function appointment(){
        return $this->belongsTo('App\Models\propertyTracker' ,'id');
    }

    public function appointment_notes(){
        return $this->hasMany('App\Models\appointment_note', 'id');
    }



    public function created_user(){
        return $this->belongsTo('App\Models\User' ,'created_by');
    }
    
}
