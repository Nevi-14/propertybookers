<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactTitle extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'contact_titles';
    protected $fillable = ['name'];
}
