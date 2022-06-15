<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

// For API Authentications
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'status', 'phone'
    ];

  
    protected $hidden = [
        'password', 'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function user_sessions(){
        return $this->hasMany('App\Models\UserSession');
    }
    public function reminder(){
        return $this->hasMany('App\Models\Reminder', 'id');
    }

    public function created_by(){
        return $this->hasMany('App\Models\Reminder', 'id');
    }


    public function appointments(){
        return $this->hasMany('App\Models\appointment', 'id');
    }

    public function agent(){
        return $this->hasMany('App\Models\propertyTracker', 'id');
    }

 
    public function acquisitonmanager(){
        return $this->hasMany('App\Models\propertyTracker','id');
      }

 
      public function userFileOwner(){
        return $this->hasMany('App\Models\FileUpload','id');
      }

    public function agentnotes(){
        return $this->hasMany('App\Models\ChesterTrackerNotes', 'id');
        
      }
      public function oncehub(){
        return $this->hasMany('App\Models\OnceHub', 'id');
        
      }

}
