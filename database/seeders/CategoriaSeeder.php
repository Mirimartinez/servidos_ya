<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Cafeteria'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Bebidas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Entradas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Platos'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Postres'
        ]);
    }
}
