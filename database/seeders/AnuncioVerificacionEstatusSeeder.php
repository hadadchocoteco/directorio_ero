<?php

namespace Database\Seeders;

use App\Models\AnuncioVerificacionEstatus;
use Illuminate\Database\Seeder;

class AnuncioVerificacionEstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estatus = array(
            ['anuncioEstatus' => 'enviado'],
            ['anuncioEstatus' => 'recibido'],
            ['anuncioEstatus' => 'revisando'],
            ['anuncioEstatus' => 'verificado'],
            ['anuncioEstatus' => 'rechazado'],
        );

        foreach ($estatus as $estatus) {
            AnuncioVerificacionEstatus::create($estatus);
        }
    }
}
