<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    //protected $table='usuarios';
    public function rol(){
        return $this->belongsTo('App/Models/Rol');
    }
    public function comandas(){
        return $this->hasMany('App/Models/Comanda');
    }
}
