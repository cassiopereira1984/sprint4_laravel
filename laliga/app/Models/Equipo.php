<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'equipos';

    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['nombre', 'ciudad', 'logo', 'fundacion', 'estadio'];

    // Los campos que deben ser ocultos en los resultados
    protected $hidden = [];

    // Los campos que se deben convertir a tipos nativos
    protected $casts = [
        'fundacion' => 'datetime',
    ];
}