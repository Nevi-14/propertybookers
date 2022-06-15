<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
  use HasFactory, Notifiable;
  protected $guarded = [];

  public function owner(){
    return $this->belongsTo('App\Models\User', 'uploaded_by');
  }

}
