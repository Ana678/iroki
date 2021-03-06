<?php
//Esse arquivo faz a conexão com o banco de dados por meio da ORM Eloquent
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function family(){
        return $this->belongsTo('App\Models\Family');
    }
}