<?php

// database/seeders/ProductoSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        Producto::insert([
            [
                'nombre' => 'Laptop HP',
                'descripcion' => 'Laptop HP 15 pulgadas con 8GB RAM',
                'precio' => 750.00,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Smartphone Samsung',
                'descripcion' => 'Galaxy S21, 128GB, negro',
                'precio' => 599.99,
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Monitor LG 24"',
                'descripcion' => 'Monitor Full HD 1080p',
                'precio' => 149.90,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

