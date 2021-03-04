<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function family(){
        return $this->belongsTo('App\Models\Family');
    }
    public function categories(){
        return $this->hasMany('App\Models\Category');
    }
}
