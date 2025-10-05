<?php

// database/seeders/ClienteSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::insert([
            [
                'nombre' => 'Juan',
                'apellido1' => 'Pérez',
                'apellido2' => 'García',
                'domicilio' => 'Calle Falsa 123',
                'email' => 'juan.perez@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido1' => 'López',
                'apellido2' => null,
                'domicilio' => 'Av. Siempre Viva 742',
                'email' => 'maria.lopez@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido1' => 'Sánchez',
                'apellido2' => 'Ramírez',
                'domicilio' => null,
                'email' => 'carlos.sanchez@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

