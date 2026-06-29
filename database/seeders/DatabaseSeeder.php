<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Generar 500 mascotas de prueba
        Pet::factory(500)->create(); // Llamada al factory para crear 500 registros de mascotas
    }
}
