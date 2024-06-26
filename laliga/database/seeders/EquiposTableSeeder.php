<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipo;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::create([
            'nombre' => 'Botafogo',
            'ciudad' => 'Rio de Janeiro',
            'fundacion' => '2000-01-01',
            'estadio' => 'Estadio A',
            'logo' => '/images/bota.png',
        ]);

        Equipo::create([
            'nombre' => 'Barcelona',
            'ciudad' => 'Barcelona',
            'fundacion' => '2003-05-05',
            'estadio' => 'Camp Nou',
            'logo' => '/images/barca.png',
        ]);

        Equipo::create([
            'nombre' => 'Real Madrid',
            'ciudad' => 'Madrid',
            'fundacion' => '2002-01-01',
            'estadio' => 'Bernabeu',
            'logo' => '/images/real.png',
        ]);

        Equipo::create([
            'nombre' => 'Rayo V',
            'ciudad' => 'Madrid',
            'fundacion' => '2003-01-01',
            'estadio' => 'Estadio A',
            'logo' => '/images/rayo.png',
        ]);

        Equipo::create([
            'nombre' => 'Victoria',
            'ciudad' => 'Salvador',
            'fundacion' => '2020-01-01',
            'estadio' => 'Castelao',
            'logo' => '/images/vict.png',
        ]);

    }
}
