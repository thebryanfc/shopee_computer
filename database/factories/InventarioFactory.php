<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
Use App\Models\Inventario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventario>
 */
class InventarioFactory extends Factory
{
    protected $model = Inventario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_product' => $this->faker->randomElement([
                'Laptop HP', 'Mouse Logitech', 'Teclado Mecánico', 'Monitor Samsung', 
                'Disco Duro SSD', 'Tarjeta Gráfica Nvidia', 'Impresora Epson', 'Auriculares Sony',
                'Tablet Lenovo', 'Cámara Web Logitech', 'Smartphone Samsung', 'Router TP-Link',
                'Memoria RAM Kingston', 'Fuente de Poder Corsair', 'Repetidor WiFi Xiaomi'
            ]),
            'existencias' => $this->faker->numberBetween(1, 100),
            'precio' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}



