<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemcomandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('itemcomandas')->insert([
            'idcomanda'=>2,
            'idproducto'=>3,
            'precio'=>1235.30

        ]);
    }
}
