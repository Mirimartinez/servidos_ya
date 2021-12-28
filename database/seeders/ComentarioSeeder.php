<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comentarios')->insert([
            'comentario' => 'Muy buena comida, me gusto mucho'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Buena comida. El baño da miedo'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'El menu vegano ofrece amplia variedad para quienes no consumimos carne, y eso es bueno'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => '¡Genios! ¡Un aplauso para el asador!'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'Luego de ingerir tres pizzas completas, una jarra de cerveza para cinco personas, un bowl de ensalada para una dieta equilibrada, y un trozo de selva negra con esspreso para la sobremesa; el paciente sufrio un esperable ACV'
        ]);
        DB::table('comentarios')->insert([
            'comentario' => 'The food was delicious, the ambient top-notch, and the service very professional. No blackjack and hookers though. 0/10, would not recommend'
        ]);
    }
}
