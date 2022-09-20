<?php

namespace Database\Seeders;

use App\Models\CuentaRangos;
use Illuminate\Database\Seeder;

class CuentaRangosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rangos = array(
            [
                'rango' => 'inicial',
                'cantidadVisitas' => 100,
                'activo' => true,
            ],
            [
                'rango' => 'top',
                'cantidadVisitas' => 500,
                'activo' => true,
            ],
        );

        foreach ($rangos as $rango) {
            CuentaRangos::create($rango);
        }
    }
}
