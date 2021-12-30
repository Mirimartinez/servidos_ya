<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            'nombre' => 'Rafa Mendoza',
            'password' => 'HelloKitty',
            'idrol' => '1',
            'activo' => true
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'MIriana Martinez',
            'password' => 'LikeASurgeon',
            'idrol' => '2',
            'activo' => true
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Charles Montgomery Burns',
            'password' => 'BirthPlacePangea',
            'idrol' => '3',
            'activo' => true
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Gabriela Servent',
            'password' => 'Hello World',
            'idrol' => '3',
            'activo' => true
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Nicolas Tracks',
            'password' => 'MotherFucker',
            'idrol' => '2',
            'activo' => true
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Pablo Augusto CC',
            'password' => 'DotCom',
            'idrol' => '1',
            'activo' => true
        ]);
    }
}
