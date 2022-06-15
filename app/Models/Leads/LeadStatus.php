<?php

namespace App\Models\Leads;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeadStatus extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
}
