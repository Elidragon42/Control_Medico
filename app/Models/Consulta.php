<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_de_empleado', 
            'descripcion' ,
            'medico',
            'diagnostico',
            'estado',
            'fecha_consulta',
            'fecha_revision'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'numero_de_empleado', 'numero_de_empleado');
    }

    public function procedimiento()
    {
        return $this->belongsTo(Procedimiento::class,'id_procedimiento', 'id');
    }
}
