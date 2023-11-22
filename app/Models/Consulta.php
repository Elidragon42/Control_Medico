<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;



    public function user()
    {
        return $this->belongsTo(User::class, 'numero_de_empleado', 'numero_de_empleado');
    }
}
