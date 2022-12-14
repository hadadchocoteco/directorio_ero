<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TipoCambioSeeder::class,
            CuentaSeeder::class,
            ModuloSeeder::class,
            ServiciosSeeder::class,
            CuentaModuloSeeder::class,
            CuentaRangosSeeder::class,
            TipoCuentaSeeder::class,
        ]);
    }
}
