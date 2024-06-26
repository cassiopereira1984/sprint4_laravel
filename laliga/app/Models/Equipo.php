<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = ['nombre', 'ciudad', 'logo', 'fundacion', 'estadio'];

    public function partidosLocal()
    {
        return $this->hasMany(Partido::class, 'equipo_local_id');
    }

    public function partidosVisitante()
    {
        return $this->hasMany(Partido::class, 'equipo_visitante_id');
    }
}

?>