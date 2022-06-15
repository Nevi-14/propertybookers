<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment_note extends Model
{
    use HasFactory;
    protected $table ='appointment_notes';
    protected $guarded = [];

    
    public function appointment_notes(){
        return $this->belongsTo('App\Models\appointment' ,'appointment_id');
    }


}
