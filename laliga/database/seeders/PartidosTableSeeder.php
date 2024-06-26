<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partido;
use App\Models\Equipo;

class PartidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ejemplo de creación de partidos de prueba
        $botafogo = Equipo::where('nombre', 'Botafogo')->first();
        $barcelona = Equipo::where('nombre', 'Barcelona')->first();
        $realMadrid = Equipo::where('nombre', 'Real Madrid')->first();
        $rayoV = Equipo::where('nombre', 'Rayo V')->first();
        $victoria = Equipo::where('nombre', 'Victoria')->first();

        Partido::create([
            'equipo_local_id' => $botafogo->id,
            'equipo_visitante_id' => $barcelona->id,
            'fecha' => '2024-07-01',
            'resultado_local' => 2,
            'resultado_visitante' => 1,
            'estadio' => 'Engenhao',
        ]);

        Partido::create([
            'equipo_local_id' => $realMadrid->id,
            'equipo_visitante_id' => $rayoV->id,
            'fecha' => '2024-07-02',
            'resultado_local' => 0,
            'resultado_visitante' => 3,
            'estadio' => 'Bernabeu',
        ]);

        Partido::create([
            'equipo_local_id' => $victoria->id,
            'equipo_visitante_id' => $barcelona->id,
            'fecha' => '2024-07-02',
            'resultado_local' => 0,
            'resultado_visitante' => 3,
            'estadio' => 'Castelao',
        ]);

    }
}
