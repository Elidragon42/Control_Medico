<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'procedimiento',
        'descripcion'

    ];

    public function consultasp()
    {
        return $this->hasMany(Consulta::class, 'id_procedimiento' ,'id', );
    }
}
