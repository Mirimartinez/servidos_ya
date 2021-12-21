<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    //protected $table='mesas';
    public function comandas(){
        return $this->hasMany('App/Models/Comanda');
    }
}
