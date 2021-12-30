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
            'pagado'=>false

        ]);
        DB::table('comandas')->insert([
            'fecha'=>'2021-12-14',
            'horainicio'=>'01:56:32',
            'horafin'=>'02:51:32',
            'idmesa'=>3,
            'idusuario'=>3,
            'importetotal'=>'1300.50',
            'pagado'=>false

        ]);
        DB::table('comandas')->insert([
            'fecha'=>'2021-10-15',
            'horainicio'=>'08:45:32',
            'horafin'=>'10:51:32',
            'idmesa'=>5,
            'idusuario'=>3,
            'importetotal'=>'4500.50',
            'pagado'=>false

        ]);
        DB::table('comandas')->insert([
            'fecha'=>'2021-11-23',
            'horainicio'=>'21:56:32',
            'horafin'=>'23:51:32',
            'idmesa'=>4,
            'idusuario'=>3,
            'importetotal'=>'2900.50',
            'pagado'=>false

        ]);
        DB::table('comandas')->insert([
            'fecha'=>'2021-10-25',
            'horainicio'=>'10:56:32',
            'horafin'=>'14:51:32',
            'idmesa'=>1,
            'idusuario'=>1,
            'importetotal'=>'14500.50',
            'pagado'=>false

        ]);
    }
}
