<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cajas')->insert([
            'importe_total' => 170,
            'fecha' => '2021-12-09',
            'hora' => '11:45:00'

        ]);

    }
}
