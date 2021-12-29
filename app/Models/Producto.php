<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo(Categoria::class,'idcategoria');
    }
    public function itemcomandas(){
        return $this->hasMany(Itemcomanda::class,'idproducto');
    }

    public static function listarProductos() {
        return static::all();
    }

    public static function nombreProducto($idproducto) {
        return static::select('nombre')->where('id',$idproducto)->first();
    }

    public static function precioProducto($idproducto) {
        return static::select('precio')->where('id',$idproducto)->first();
    }
}
