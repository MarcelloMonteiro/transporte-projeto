<?php

namespace Database\Seeders;

use App\Models\Cor;
use Illuminate\Database\Seeder;

class CorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cor::create(['cor' => 'Amarelo']);
        Cor::create(['cor' => 'Azul']);
        Cor::create(['cor' => 'Bege']);
        Cor::create(['cor' => 'Branca']);
        Cor::create(['cor' => 'Cinza']);
        Cor::create(['cor' => 'Dourada']);
        Cor::create(['cor' => 'Grena']);
        Cor::create(['cor' => 'Laranja']);
        Cor::create(['cor' => 'Marrom']);
        Cor::create(['cor' => 'Prata']);
        Cor::create(['cor' => 'Preta']);
        Cor::create(['cor' => 'Rosa']);
        Cor::create(['cor' => 'Roxa']);
        Cor::create(['cor' => 'Verde']);
        Cor::create(['cor' => 'Vermelha']);
        Cor::create(['cor' => 'Fantasia']);
    }
}
