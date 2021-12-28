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
        DB::table('cajas')->insert([
            'importe_total' => 200,
            'fecha' => '2021-12-09',
            'hora' => '12:00:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 140,
            'fecha' => '2021-12-09',
            'hora' => '12:15:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 230,
            'fecha' => '2021-12-09',
            'hora' => '12:30:00'

        ]);

    }
}
