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
            'idcomanda'=>1,
            'idproducto'=>1,
            'precio'=>1235.30

        ]);
        DB::table('itemcomandas')->insert([
            'idcomanda'=>2,
            'idproducto'=>3,
            'precio'=>835.40

        ]);
        DB::table('itemcomandas')->insert([
            'idcomanda'=>3,
            'idproducto'=>2,
            'precio'=>1555.30

        ]);
        DB::table('itemcomandas')->insert([
            'idcomanda'=>4,
            'idproducto'=>4,
            'precio'=>1203.30

        ]);
        DB::table('itemcomandas')->insert([
            'idcomanda'=>5,
            'idproducto'=>6,
            'precio'=>4500.60

        ]);
        DB::table('itemcomandas')->insert([
            'idcomanda'=>6,
            'idproducto'=>3,
            'precio'=>2950.75

        ]);
    }
}
