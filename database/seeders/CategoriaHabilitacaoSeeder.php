<?php

namespace Database\Seeders;

use App\Models\CategoriaHabilitacao;
use Illuminate\Database\Seeder;

class CategoriaHabilitacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaHabilitacao::create([
            'categoria' => 'ACC',
            'descricao' => 'Autorização para conduzir ciclomotor'
        ]);

        CategoriaHabilitacao::create([
            'categoria' => 'A',
            'descricao' => 'Autorização para conduzir veículos de duas ou três rodas, com ou sem carro lateral, com mais de 50 cilindradas.'
        ]);

        CategoriaHabilitacao::create([
            'categoria' => 'B',
            'descricao' => 'Autorização para conduzir veículos de 4 rodas com até 3.500 quilos de peso bruto total e capacidade para até 8 passageiros'
        ]);

        CategoriaHabilitacao::create([
            'categoria' => 'C',
            'descricao' => 'Autorização para conduzir todo tipo de automóvel da categoria "B" e também os veículos de carga, não articulados, com mais de 3.500 quilos de peso bruto total'
        ]);

        CategoriaHabilitacao::create([
            'categoria' => 'D',
            'descricao' => 'Autorização para o transporte de passageiros que acomodem mais de 8 pessoas.'
        ]);

        CategoriaHabilitacao::create([
            'categoria' => 'E',
            'descricao' => 'Autorização para conduzir todos os veículos incluídos nos tipos de CNH "B", "C" e "D". Além disso, pode, também, dirigir veículos com unidades acopladas que excedam 6 toneladas. Aqui estão as carretas e caminhões com reboques e semirreboques articulados.'
        ]);

    }
}
