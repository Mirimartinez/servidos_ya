<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    //protected $table='mesas';
    public function comandas() {
        return $this->hasMany(Comanda::class,'idmesa');
    }

    public function estadoMesa() {
        switch ($this->estado) {
            case 0:
                $estado = "Libre";
                break;
            case 1:
                $estado = "Ocupada";
                break;
        }
        return $estado;
    }

    public function totalMesa() {
        switch ($this->estado) {
            case 0:
                $total = 0;
                break;
            case 1:
                $comanda = Comanda::comandaActivaDeMesa($this->id);
                if (!is_null($comanda)) {
                    $total = $comanda->importetotal;
                }
                else {
                    $total = 0;
                }
                break;
        }
        return $total;
    }

    public static function itemsMesa($id) {
        $comanda = Comanda::comandaActivaDeMesa($id);
        $items = $comanda->itemcomandas;
    }
}
