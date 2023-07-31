<?php

use App\Http\Controllers\soldadosController;
use Illuminate\Support\Facades\Route;

Route::get('soldado/create',[soldadosController::class,'create']);

Route::post('soldados',[soldadosController::class,'store'])->name('soldados.store');



Route::get('/', function () {
    return view('welcome');
});
