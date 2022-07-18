<?php

namespace Database\Seeders;

use App\Models\TipoVeiculo;
use Illuminate\Database\Seeder;

class TipoVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVeiculo::create([
            'tipo' => 'Motocicleta'
        ]);

        TipoVeiculo::create([
            'tipo' => 'Automóvel'
        ]);

        TipoVeiculo::create([
            'tipo' => 'Microônibus'
        ]);

        TipoVeiculo::create([
            'tipo' => 'Ônibus'
        ]);

        TipoVeiculo::create([
            'tipo' => 'Caminhonete'
        ]);

        TipoVeiculo::create([
            'tipo' => 'Caminhão'
        ]);

    }
}
