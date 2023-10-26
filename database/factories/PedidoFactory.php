<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'identificador' =>$this->faker->word(),
            'total' =>$this->faker->randomFloat(1, 20, 30),
            'cliente_id' => Cliente::factory(),
            'envio' =>$this->faker->randomElement(['Local', 'Internacional']),
            'terminos' =>$this->faker->sentence(),
        ];
    }
}
