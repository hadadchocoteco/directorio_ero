<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios = array(
            ['nombre' => 'Trato de novios'],
            ['nombre' => 'Sexo'],
            ['nombre' => 'Oral'],
            ['nombre' => 'Anal'],
            ['nombre' => 'Sexo grupal'],
            ['nombre' => 'Doble penetración'],
            ['nombre' => 'Escort'],
            ['nombre' => 'Gay'],
            ['nombre' => 'Transexual'],
            ['nombre' => 'Juguetes'],
            ['nombre' => 'Parejas'],
            ['nombre' => 'Masaje'],
        );

        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }
    }
}
