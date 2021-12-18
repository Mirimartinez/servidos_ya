<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    //protected $table='comandas';
    public function usuario(){
        return $this->belongsTo('App/Model/Usuario');
    }
    public function mesa(){
        return $this->belongsTo('App/Models/Mesa');
    }
    public function itemcomandas(){
        return $this->hasMany('App/Models/Itemcomanda');
    }
}
