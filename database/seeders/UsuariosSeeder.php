<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'numero_de_empleado' => 7839048564,
            'name' => 'Juan de la cruz',
            'genero' => 1,
            'fecha_de_nacimiento' => '20 de noviembre del 2005',
            'imss' => 278490567489,
            'tipo_de_sangre' => 'A+',
            'alergias' => 'ninguna',
            'telefono' => 6333336915,
            'direccion' => 'calle 1 y 2 avenida 6',
            'email' => 'juan.cruz.mf@gmail.com',

        ]);

        DB::table('users')->insert([
            'numero_de_empleado' => 1234567812,
            'name' => 'Juan humberto',
            'genero' => 1,
            'fecha_de_nacimiento' => '27 de noviembre del 2000',
            'imss' => 278490585489,
            'tipo_de_sangre' => 'A-',
            'alergias' => 'ninguna',
            'telefono' => 6333332345,
            'direccion' => 'calle 8 avenida 6',
            'email' => 'juan.humberto.mf@gmail.com',

        ]);

        DB::table('users')->insert([
            'numero_de_empleado' => 7634567890,
            'name' => 'pabla',
            'genero' => 2,
            'fecha_de_nacimiento' => '1 de diciembre del 1995',
            'imss' => 784905638949,
            'tipo_de_sangre' => 'B+',
            'alergias' => 'ninguna',
            'telefono' => 6333330215,
            'direccion' => 'calle 19  avenida 26',
            'email' => 'pabla.mf@gmail.com',

        ]);

        DB::table('users')->insert([
            'numero_de_empleado' => 9745667890,
            'name' => 'elias jaimes',
            'genero' => 1,
            'fecha_de_nacimiento' => '8 de octubre del 2002',
            'imss' => 278497893049,
            'tipo_de_sangre' => 'AB+',
            'alergias' => 'ninguna',
            'telefono' => 6333300005,
            'direccion' => 'calle 1 avenida 1',
            'email' => 'elias.jaimes.mf@gmail.com',

        ]);

        DB::table('users')->insert([
            'numero_de_empleado' => 12342234590,
            'name' => 'irving garcia',
            'genero' => 1,
            'fecha_de_nacimiento' => '3 de septiembre del 2003',
            'imss' => 278495629389,
            'tipo_de_sangre' => 'B-',
            'alergias' => 'ninguna',
            'telefono' => 6338289203,
            'direccion' => 'calle 22 avenida panamericana',
            'email' => 'irving.garcia.mf@gmail.com',

        ]);
        DB::table('users')->insert([
            'numero_de_empleado' => 89983234590,
            'name' => 'jorge vega',
            'genero' => 1,
            'fecha_de_nacimiento' => '19 de enero del 2003',
            'imss' => 910949562939,
            'tipo_de_sangre' => 'B-',
            'alergias' => 'ninguna',
            'telefono' => 6338289080,
            'direccion' => 'calle internacional avenida panamericana',
            'email' => 'jorge.vega.mf@gmail.com',

        ]);

        DB::table('users')->insert([
            'numero_de_empleado' => 9987654321,
            'name' => 'gael garcia',
            'genero' => 1,
            'fecha_de_nacimiento' => '12 de junio del 2006',
            'imss' => 999999999999,
            'tipo_de_sangre' => 'A+',
            'alergias' => 'ninguna',
            'telefono' => 6331316108,
            'direccion' => 'calle 10 y 11 avenida azueta',
            'email' => 'gael.garcia.mf@gmail.com',

        ]);

        

    }
}
