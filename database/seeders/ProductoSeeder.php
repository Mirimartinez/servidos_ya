<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'tipo' => 'Cafeteria',
            'precio' => 170
        ]);
    }
}
