<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
