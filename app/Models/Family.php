<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany('App\Models\User');
    }
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    public function messages(){
        return $this->hasMany('App\Models\Message');
    }
    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }
}
