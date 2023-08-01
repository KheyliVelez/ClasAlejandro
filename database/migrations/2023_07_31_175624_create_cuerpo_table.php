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
        Schema::create('cuerpo', function (Blueprint $table) {
            $table->id();
      /*       $table->string('denom_ce');
            $table->timestamps();

            $table->foreign('soldado')->references('id')
            ->on('users')->onDelete('set null');
            $table->timestamps(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuerpo');
    }
};