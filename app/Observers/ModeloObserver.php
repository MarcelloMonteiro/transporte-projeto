<?php

namespace App\Observers;

use App\Models\Modelo;
use Illuminate\Support\Str;

class ModeloObserver
{
    public function creating(Modelo $modelo)
    {
        $modelo->uuid = Str::uuid();
    }
}
