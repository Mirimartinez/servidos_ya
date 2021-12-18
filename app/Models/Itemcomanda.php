<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemcomanda extends Model
{
    use HasFactory;
    public function comanda(){
        return $this->belongsTo('app/Models/Comanda');
    }
    public function producto(){
        return $this->belongsTo('App/Models/Producto');
    }

}
