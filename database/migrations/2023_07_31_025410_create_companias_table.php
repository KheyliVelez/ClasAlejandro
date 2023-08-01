<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

     
    public function up()
    {
        Schema::create('companias', function (Blueprint $table) {
            $table->id();
            $table->string('acti_comp');
            $table->timestamps();

            /* 
            $table->foreign('soldado')
            ->references('id')
            ->on('soldado')
            ->onDelete('set null');

            
            $table->unsignedBigInteger('cod_c1')->nullable();
            $table->string('num_com2');
            $table->primary(['cod_c1','num_com2']); */
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('compañias');
    }
   
    
};
