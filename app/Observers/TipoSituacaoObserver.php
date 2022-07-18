<?php

namespace App\Observers;

use App\Models\TipoSituacao;
use Illuminate\Support\Str;

class TipoSituacaoObserver
{
    public function creating(TipoSituacao $tipoSituacao)
    {
        $tipoSituacao->uuid = Str::uuid();
    }
}
