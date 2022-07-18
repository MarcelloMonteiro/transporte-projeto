<?php

namespace App\Observers;

use App\Models\TipoVeiculo;
use Illuminate\Support\Str;

class TipoVeiculoObserver
{
    public function creating(TipoVeiculo $tipoVeiculo)
    {
        $tipoVeiculo->uuid = Str::uuid();
    }
}
