<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function permisos(){
        return $this->hasMany('App/Models/Permiso');
    }
    public function usuarios(){
        return $this->hasMany('app/Models/Usuario');
    }
}
