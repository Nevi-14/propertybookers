<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomField extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
}
