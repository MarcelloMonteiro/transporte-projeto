<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TipoSituacao extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $table = 'tipos_situacao';

    protected $fillable = [
        'tipo',
        'descricao'
    ];

    public function situacoes()
    {
        return $this->hasMany(Situacao::class);
    }
}
