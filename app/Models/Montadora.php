<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Montadora extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'montadora',
        'descricao',
        'logo'
    ];

    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
