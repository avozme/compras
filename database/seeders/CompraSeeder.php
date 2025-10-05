<?php

// database/seeders/CompraSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraSeeder extends Seeder
{
    public function run()
    {
        Compra::insert([
            [
                'producto_id' => 1,
                'cliente_id' => 1,
                'fecha' => '2025-10-01',
                'hora' => '10:30:00',
                'unidades' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 2,
                'cliente_id' => 2,
                'fecha' => '2025-10-02',
                'hora' => '12:45:00',
                'unidades' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 3,
                'cliente_id' => 3,
                'fecha' => '2025-10-03',
                'hora' => '09:15:00',
                'unidades' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

