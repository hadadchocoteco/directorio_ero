<?php

namespace Database\Seeders;

use App\Models\CuentaModulo;
use App\Models\Modulo;
use Illuminate\Database\Seeder;

class CuentaModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modulos = array(
            [
                'idCuenta' => 1,
                'idModulo' => 1,
                'ver' => true,
                'guardar' => true,
                'actualizar' => true,
                'inhabilitar' => true,
                'eliminar' => true,
                'activo' => true,
            ],
            [
                'idCuenta' => 1,
                'idModulo' => 2,
                'ver' => true,
                'guardar' => true,
                'actualizar' => true,
                'inhabilitar' => true,
                'eliminar' => true,
                'activo' => true,
            ],
            [
                'idCuenta' => 1,
                'idModulo' => 3,
                'ver' => true,
                'guardar' => true,
                'actualizar' => true,
                'inhabilitar' => true,
                'eliminar' => true,
                'activo' => true,
            ],
            [
                'idCuenta' => 1,
                'idModulo' => 4,
                'ver' => true,
                'guardar' => true,
                'actualizar' => true,
                'inhabilitar' => true,
                'eliminar' => true,
                'activo' => true,
            ],
            [
                'idCuenta' => 1,
                'idModulo' => 5,
                'ver' => true,
                'guardar' => true,
                'actualizar' => true,
                'inhabilitar' => true,
                'eliminar' => true,
                'activo' => true,
            ]
        );

        foreach ($modulos as $modulo) {
            CuentaModulo::create($modulo);
        }
    }
}
