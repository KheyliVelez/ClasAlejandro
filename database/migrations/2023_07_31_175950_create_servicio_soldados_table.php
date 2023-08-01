<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_soldados', function (Blueprint $table) {
            $table->id();

         

        $table->unsignedBigInteger('servicio_id')->nullable();
        $table->unsignedBigInteger('soldados_id')->nullable();



        $table->foreign('servicio_id')
        ->references('id')
        ->on('servicios')->onDelete('set null');

        $table->foreign('soldados_id')
        ->references('id')
        ->on('soldados')->onDelete('set null');

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
        Schema::dropIfExists('servicio_soldados');
    }
};
