<?php

namespace Database\Seeders;

use App\Models\Cuenta;
use Illuminate\Database\Seeder;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuenta::create([
            'usuario' => 'tonyrenchoria@gmail.com',
            'contrasena' => '12345',
            'nombre' => 'Antonio',
            'apellido' => 'Renteria',
            'sexo' => 'hombre',
            'rol' => 'heterosexual',
            'fechaNacimiento' => '1990-03-01',
            'codigoMunicipio' => '',
        ]);
    }
}
