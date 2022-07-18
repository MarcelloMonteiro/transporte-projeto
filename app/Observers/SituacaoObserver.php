<?php

namespace App\Observers;

use App\Models\Situacao;
use Illuminate\Support\Str;

class SituacaoObserver
{
    public function creating(Situacao $situacao)
    {
        $situacao->uuid = Str::uuid();
    }
}
