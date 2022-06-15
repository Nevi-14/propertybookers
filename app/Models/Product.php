<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function productgroup(){
        return $this->belongsTo('App\Models\ProductGroup', 'product_group_id');
    }
}
