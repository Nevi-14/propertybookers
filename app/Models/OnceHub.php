<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnceHub extends Model
{
    protected $table = 'once_hubs';
    use HasFactory;
    protected $guarded = [];



    public function oncehub()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
