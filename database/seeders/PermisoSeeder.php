<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permisos')->insert([
            'idrol' => 1,
            'proceso'=>'comandas'

        ]);
        DB::table('permisos')->insert([
            'idrol' => 2,
            'proceso'=>'Contabilidad'

        ]);
        DB::table('permisos')->insert([
            'idrol' => 2,
            'proceso'=>'Contabilidad'

        ]);
        DB::table('permisos')->insert([
            'idrol' => 3,
            'proceso'=>'Gerencia'

        ]);

    }
}
