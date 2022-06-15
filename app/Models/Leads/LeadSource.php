<?php

namespace App\Models\Leads;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeadSource extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
}
