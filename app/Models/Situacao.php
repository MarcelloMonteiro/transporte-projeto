<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Situacao extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $table = 'situacoes';

    public $fillable = [
        'tipo_situacao_id',
        'situacao',
        'descricao'
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoSituacao::class, 'tipo_situacao_id', 'id');
    }
}
