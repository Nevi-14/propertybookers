<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddressPhone extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function address(){
        return $this->belongsTo('App\Models\Address\Address');
    }
}
