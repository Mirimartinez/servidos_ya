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
            'fecha' => '2021-12-07',
            'hora' => '12:00:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 140,
            'fecha' => '2020-11-06',
            'hora' => '12:15:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 230,
            'fecha' => '2020-03-11',
            'hora' => '12:30:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 1058,
            'fecha' => '2019-04-08',
            'hora' => '12:45:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 2596,
            'fecha' => '2020-03-05',
            'hora' => '11:30:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 459,
            'fecha' => '2020-02-10',
            'hora' => '15:45:00'

        ]);
        DB::table('cajas')->insert([
            'importe_total' => 3056,
            'fecha' => '2020-10-11',
            'hora' => '16:30:00'

        ]);

    }
}
