<?php

namespace App\Observers;

use App\Models\Veiculo;
use Illuminate\Support\Str;

class VeiculoObserver
{
    public function creating(Veiculo $veiculo)
    {
        $veiculo->uuid = Str::uuid();
    }
}
