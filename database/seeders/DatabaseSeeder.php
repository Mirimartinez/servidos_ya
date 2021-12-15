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
            ProductoSeeder::class,
            CajaSeeder::class,
            PermisoSeeder::class,
            RolSeeder::class,
            UsuarioSeeder::class,
            ComandaSeeder::class,
            ItemcomandaSeeder::class,
            ComentarioSeeder::class,
            MesaSeeder::class,
            CategoriaSeeder::class
        ]);

    }
}
