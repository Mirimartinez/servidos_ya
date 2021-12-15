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
    }
}
