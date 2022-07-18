<?php

namespace App\Observers;

use App\Models\Combustivel;
use Illuminate\Support\Str;

class CombustivelObserver
{
    public function creating(Combustivel $combustivel)
    {
        $combustivel->uuid = Str::uuid();
    }
}
