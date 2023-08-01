<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuartel extends Model
{
    use HasFactory;
    public function servicios(){
        return $this->morphTo();
    }

    public function cuartel(){
            return $this->morphOne('App\Models\cuartel','cuartels');
        }
}
