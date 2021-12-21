<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comandas')->insert([
            'fecha'=>'2021-12-14',
            'horainicio'=>'00:06:32',
            'horafin'=>'01:01:32',
            'idmesa'=>1,
            'idusuario'=>1,
            'importetotal'=>'1258.52',
            'pagado'=>true

        ]);
    }
}
