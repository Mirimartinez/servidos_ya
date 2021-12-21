<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcomandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcomandas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idcomanda')
                ->constrained('comandas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('idproducto')
                ->constrained('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('precio','8','2');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemcomandas');
    }
}
