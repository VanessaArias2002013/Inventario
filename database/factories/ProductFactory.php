<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'dispositivo' => $this->faker->sentence(6, true),
            'n/serie' => $this->faker->sentence(2, true),
            'marca' => $this->faker->sentence(6, true),
            'modelo' => $this->faker->sentence(6, true),
            'departamento' => $this->faker->sentence(6, true),
            'asignado_a' => $this->faker->sentence(6, true),
            'ubicacion' => $this->faker->sentence(6, true),
            'responsable_final' => $this->faker->sentence(6, true),
            'estatus' => $this->faker->sentence(6, true),
            'ip' => $this->faker->sentence(6, true),
            'hostname' => $this->faker->sentence(6, true),
            'observaciones' => $this->faker->paragraph(),
            
        ];
    }
}
