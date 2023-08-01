<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuerpoE extends Model
{
    use HasFactory;
    public function servicios(){
        return $this->morphTo();
    }
}
  

}
