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
        $carreas = ['TI', 'MECATRONICA', 'CONTABILIDAD', 'ENERGIAS RENOVABLES', 'MANTENIMIENTO'];
        
        foreach($carreas as $carrera){
            DB::table('carreras')->insert([
                'nombre' => $carrera
            ]);
        }
    }
}
