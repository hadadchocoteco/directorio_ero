<?php

namespace Database\Seeders;

use App\Models\TipoCuenta;
use Illuminate\Database\Seeder;

class TipoCuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = array(
            [
                'tipo' => 'Anuncio',
                'costoAnuncio' => 100,
                'creditoPagoAnuncio' => 1,
                'descuento' => 5,
                'activo' => true,
            ],
            [
                'tipo' => 'Experiencia',
                'activo' => true,
            ],
        );

        foreach ($tipos as $tipo) {
            TipoCuenta::create($tipo);
        }
    }
}
