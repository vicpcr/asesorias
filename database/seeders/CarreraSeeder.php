<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carreas = ['TSU. EN TECNOLOGIAS DE LA INFORMACION', 'TSU. EN MECATRONICA', 'TSU. EN CONTADURIA', 'TSU. EN ENERGIAS RENOVABLES', 'TSU. EN MECANICA INDUSTRIAL', 'TSU. EN MANTENIMIENTO INDUSTRIAL', 'TSU. EN MANTENIMIENTO PETROLERO', 'LIC. EN CONTADURIA', 'ING. EN DESARROLLO Y GESTION DE SOFTWARE', 'ING. EN ENERGIAS RENOVABLES', 'ING. EN METAL MECANICA', 'ING. EN MANTENIMIENTO INDUSTRIAL', 'ING. EN MANTENIMIENTO PETROLERO', 'ING. EN MECATRONICA'];
        
        foreach($carreas as $carrera){
            DB::table('carreras')->insert([
                'nombre' => $carrera
            ]);
        }
    }
}
