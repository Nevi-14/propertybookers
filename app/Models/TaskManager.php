<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TaskManager extends Model
{
    protected $table ="taskmanager";
    protected $guarded = [];

    public function owner(){
        return $this->belongsTo('App\Models\User', 'owner_id');
    }
    public function requester(){
        return $this->belongsTo('App\Models\User', 'requester_id');
    }

}
