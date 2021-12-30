<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Cafe Espresso Doble',
            'descripcion' => 'Cafe Espresso Doble 60ml',
            'idcategoria' => 1,
            'precio' => 170
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Cafe doble',
            'descripcion' => 'Cafe Doble 60ml',
            'idcategoria' => 1,
            'precio' => 190
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Cafe con leche',
            'descripcion' => 'Cafe simple con leche',
            'idcategoria' => 1,
            'precio' => 240
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Flan con crema',
            'descripcion' => 'Flan tipo casero con crema chantilli',
            'idcategoria' => 5,
            'precio' => 340
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Budin ingles con trufas',
            'descripcion' => 'Budin estilo ingles con frutos',
            'idcategoria' => 5,
            'precio' => 350
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Suprema de pollo con pure',
            'descripcion' => 'Milanesa de pollo con pure mixto',
            'idcategoria' => 8,
            'precio' => 650
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Lasagna con salsa bolognesa',
            'descripcion' => 'Pastas caseras con salsa de autor',
            'idcategoria' => 8,
            'precio' => 650
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Gaseosa',
            'descripcion' => 'Gaseosa de Coca Cola',
            'idcategoria' => 2,
            'precio' => 340
        ]);
    }
}
