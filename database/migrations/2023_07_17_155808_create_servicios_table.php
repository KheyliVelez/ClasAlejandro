<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('acti_ser');

            
            $table->unsignedBigInteger('cod_ser1')->nullable();
            $table->string('cod_s1');
            $table->primary(['cod_ser1','cod_s1']);
          
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};
