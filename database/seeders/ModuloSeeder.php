<?php

namespace Database\Seeders;

use App\Models\Modulo;
use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
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
                'modulo' => 'cuentas',
                'rutaModulo' => 'cuentas',
                'grupoModulo' => 'administracion',
                'activo' => true,
            ],
            [
                'modulo' => 'anuncioes',
                'rutaModulo' => 'anuncioes',
                'grupoModulo' => 'administracion',
                'activo' => true,
            ],
            [
                'modulo' => 'experiencias',
                'rutaModulo' => 'experiencias',
                'grupoModulo' => 'administracion',
                'activo' => true,
            ],
            [
                'modulo' => 'recargas',
                'rutaModulo' => 'recargas',
                'grupoModulo' => 'administracion',
                'activo' => true,
            ],
            [
                'modulo' => 'reporte de recargas',
                'rutaModulo' => 'reporteRecargas',
                'grupoModulo' => 'reportes',
                'activo' => true,
            ],
        );

        foreach ($modulos as $modulo) {
            Modulo::create($modulo);
        };
    }
}
