<?php

namespace Database\Seeders;

use App\Models\Situacao;
use Illuminate\Database\Seeder;

class SituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SITUAÇÕES MANUTENÇÃO
        Situacao::create([
            'tipo_situacao_id' => 1,
            'situacao' => 'Planejada'
        ]);

        Situacao::create([
            'tipo_situacao_id' => 1,
            'situacao' => 'Realizada'
        ]);

        //SITUAÇÕES VEÍCULOS
        Situacao::create([
            'tipo_situacao_id' => 2,
            'situacao' => 'Em uso',
            'descricao' => 'Veículos que estão sendo utilizados'
        ]);

        Situacao::create([
            'tipo_situacao_id' => 2,
            'situacao' => 'Em manutenção',
            'descricao' => 'Veículos que estão em manutenção'
        ]);

        Situacao::create([
            'tipo_situacao_id' => 2,
            'situacao' => 'Garagem',
            'descricao' => 'Veículos parados na garagem'
        ]);

        //SITUAÇÕES VIAGEM
        Situacao::create([
            'tipo_situacao_id' => 3,
            'situacao' => 'Realizada',
        ]);

        Situacao::create([
            'tipo_situacao_id' => 3,
            'situacao' => 'Programada',
        ]);

        Situacao::create([
            'tipo_situacao_id' => 3,
            'situacao' => 'Acontecendo',
        ]);

    }
}
