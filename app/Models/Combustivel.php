<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Combustivel extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $table = 'combustiveis';

    protected $fillable = [
        'combustivel'
    ];

    public function carros()
    {
        return $this->hasMany(Veiculo::class);
    }
}
