<?php

namespace Database\Seeders;

use App\Models\Combustivel;
use Illuminate\Database\Seeder;

class CombustivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Combustivel::create(['combustivel' => 'Flex']);
        Combustivel::create(['combustivel' => 'Gasolina']);
        Combustivel::create(['combustivel' => 'Álcool']);
        Combustivel::create(['combustivel' => 'GNV']);
    }
}
