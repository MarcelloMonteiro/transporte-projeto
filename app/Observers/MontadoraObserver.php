<?php

namespace App\Observers;

use App\Models\Montadora;
use Illuminate\Support\Str;

class MontadoraObserver
{
    public function creating(Montadora $montadora)
    {
        $montadora->uuid = Str::uuid();
    }
}
