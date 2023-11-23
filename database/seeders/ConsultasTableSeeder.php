<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConsultasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('consultas')->insert([
                'numero_de_empleado' => $faker->unique()->randomNumber(8, true),
                'descripcion' => $faker->sentence,
                'medico' => $faker->name,
                'diagnostico' => $faker->text,
                'fecha_consulta' => $faker->date,
                'fecha_revision' => $faker->date,
                'estado' => $faker->randomElement(['Realizado', 'Pendiente']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
