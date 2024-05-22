<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    // Los campos que pueden ser asignados masivamente
    protected $fillable = ['nombre', 'ciudad', 'logo', 'fundacion', 'estadio'];
}
?>