<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rol')->insert([
            'nombre' => 'Mozo'
        ]);
        DB::table('rol')->insert([
            'nombre' => 'Cajero'
        ]);
        DB::table('rol')->insert([
            'nombre' => 'Gerente'
        ]);
    }
}
