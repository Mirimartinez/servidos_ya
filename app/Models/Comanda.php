<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    //protected $table='comandas';
    public function usuario(){
        return $this->belongsTo(Usuario::class,'idusuario');
    }
    public function mesa(){
        return $this->belongsTo(Mesa::class,'idmesa');
    }
    public function itemcomandas(){
        return $this->hasMany(Itemcomanda::class,'idcomanda');
    }

    public static function comandaActivaDeMesa($idmesa) {
        return static::where('idmesa', $idmesa)->where('pagado',0)->first();
    }
    
}
