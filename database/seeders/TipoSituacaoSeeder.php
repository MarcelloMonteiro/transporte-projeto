<?php

namespace Database\Seeders;

use App\Models\TipoSituacao;
use Illuminate\Database\Seeder;

class TipoSituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoSituacao::create([
            'tipo' => 'Manutenção',
            'descricao' => 'Tipos de situação específicas de manutenção'
        ]);

        TipoSituacao::create([
            'tipo' => 'Veículos',
            'descricao' => 'Tipos de situação específicas de veículos'
        ]);

        TipoSituacao::create([
            'tipo' => 'Viagem',
            'descricao' => 'Tipos de situação específicas de viagem'
        ]);
    }
}
