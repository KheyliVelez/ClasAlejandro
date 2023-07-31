<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

     
    public function up()
    {
        Schema::create('compañia', function (Blueprint $table) {
            $table->id();
            $table->string('acti_comp');
            $table->timestamps();

            $table->foreign('soldado')->references('id')
            ->on('users')->onDelete('set null');
        });
    }
g
    
    public function down()
    {
        Schema::dropIfExists('compañia');
    }
   
    
};
