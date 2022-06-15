<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;
    protected $table ='file_uploads';
    protected $guarded = [];


    public function file(){
        return $this->belongsTo('App\Models\propertyTracker','id');
  
        }

        public function userfile(){
            return $this->belongsTo('App\Models\User','user_id');
      
            }
}
