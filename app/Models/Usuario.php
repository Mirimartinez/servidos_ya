<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    //protected $table='usuarios';
    public function rol(){
        return $this->belongsTo(Rol::class,'idrol');
    }
    public function comandas(){
        return $this->hasMany(Comanda::class,'idusuario');
    }
}
