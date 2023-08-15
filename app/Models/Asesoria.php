<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    use HasFactory;

    public function carrera(){
        return $this -> belongsTo(Carrera::class, 'carrera_id', 'id');
    }
}
