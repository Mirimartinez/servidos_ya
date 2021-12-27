<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemcomanda extends Model
{
    use HasFactory;
    public function comanda(){
        return $this->belongsTo(Comanda::class,'idcomanda');
    }
    public function producto(){
        return $this->belongsTo(Producto::class,'idproducto');
    }

    public static function listaItems($idcomanda) {
        return static::where('idcomanda',$idcomanda)->get();
    }

}
