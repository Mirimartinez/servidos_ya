<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mesas')->insert([
            'estado' => true
        ]);
        DB::table('mesas')->insert([
            'estado' => false
        ]); DB::table('mesas')->insert([
            'estado' => false
        ]);
        DB::table('mesas')->insert([
            'estado' => false
        ]);
        DB::table('mesas')->insert([
            'estado' => true
        ]);
        DB::table('mesas')->insert([
            'estado' => true
        ]);
    }
}
