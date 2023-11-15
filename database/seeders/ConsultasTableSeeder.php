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

        foreach (range(1, 10) as $index) {
            DB::table('consultas')->insert([
                'empleado' => $faker->name,
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
