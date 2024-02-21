<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Empleado extends Model
{
   
    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'numero_de_empleado', 'numero_de_empleado');
    }

    


}
