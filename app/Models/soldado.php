<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soldado extends Model
{
    use HasFactory;
// Relacion 1 a Muchos 
    public function cuerpoE(){
        return $this->hasMany('App\Models\cuerpoE');
    }

    public function cuartel(){
        return $this->hasMany('App\Models\cuartel');
    }

    public function compañia(){
        return $this->hasMany('App\Models\compañia');
    }

// relacion polimorfica
    public function servicio(){
        return $this->morphOne('App\Models\servicio','servicios');
    }
}
