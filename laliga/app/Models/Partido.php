<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'equipo_local_id',
        'equipo_visitante_id',
        'fecha',
        'resultado_local',
        'resultado_visitante',
        'estadio',
    ];

    public function equipoLocall()
    {
        return $this->belongsTo(Equipo::class, 'equipo_local_id');
    }

    public function equipoVsitantel()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante_id');
    }
}
?>