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

    
     //Relacion Muchos a Muchos

    public function servicio(){
        return $this->belongsToMany('App\Models\servicio');
    }
}
