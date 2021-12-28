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
            'pagado'=>false

        ]);
        DB::table('comandas')->insert([
            'fecha'=>'2021-12-14',
            'horainicio'=>'01:01:32',
            'horafin'=>'01:56:32',
            'idmesa'=>2,
            'idusuario'=>2,
            'importetotal'=>'1300.50',
            'pagado'=>true

        ]);
        DB::table('comandas')->insert([
            'fecha'=>'2021-12-14',
            'horainicio'=>'01:56:32',
            'horafin'=>'02:51:32',
            'idmesa'=>3,
            'idusuario'=>3,
            'importetotal'=>'1300.50',
            'pagado'=>true

        ]);
    }
}
