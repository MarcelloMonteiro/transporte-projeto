<?php

namespace App\Observers;

use App\Models\Cor;
use Illuminate\Support\Str;

class CorObserver
{
    public function creating(Cor $cor)
    {
        $cor->uuid = Str::uuid();
    }
}
