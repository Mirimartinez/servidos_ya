<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CajaSeeder::class,
            RolSeeder::class,
            MesaSeeder::class,
            PermisoSeeder::class,
            UsuarioSeeder::class,
            ComentarioSeeder::class,
            CategoriaSeeder::class,
            ProductoSeeder::class,
            ComandaSeeder::class,
            ItemcomandaSeeder::class
        ]);

    }
}
