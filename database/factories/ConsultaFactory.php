<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consulta>
 */
class ConsultaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'numero_de_empleado' => fake()->unique()->randomNumber(8, true),
                'descripcion' => fake()->sentence,
                'medico' => fake()->name,
                'diagnostico' => fake()->text,
                'fecha_consulta' => fake()->date,
                'fecha_revision' => fake()->date,
                'estado' => fake()->randomElement(['Realizado', 'Pendiente']),
                'created_at' => now(),
                'updated_at' => now(),
        ];
    }
}
