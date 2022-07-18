<?php

namespace App\Observers;

use App\Models\CategoriaHabilitacao;
use Illuminate\Support\Str;

class CategoriaHabilitacaoObserver
{
    public function creating(CategoriaHabilitacao $categoriaHabilitacao)
    {
        $categoriaHabilitacao->uuid = Str::uuid();
    }
}
