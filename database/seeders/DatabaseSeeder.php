<?php

namespace Database\Seeders;

use App\Models\Combustivel;
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
            CategoriaHabilitacaoSeeder::class,
            CombustivelSeeder::class,
            CorSeeder::class,
            MontadoraSeeder::class,
            ModeloSeeder::class,
            UserSeeder::class,
            TipoVeiculoSeeder::class,
            TipoSituacaoSeeder::class,
            SituacaoSeeder::class,
        ]);
    }
}
