<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Veiculo extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'situacao_id',
        'tipo_veiculo_id',
        'modelo_id',
        'combustivel_id',
        'cor_id',
        'placa',
        'ano_fabricacao',
        'ano_modelo',
        'cor',
        'renavam',
        'chassi',
        'odometro',
        'motorizacao',
        'foto',
    ];

    public function situacao()
    {
        return $this->belongsTo(Situacao::class);
    }

    public function tipoVeiculo()
    {
        return $this->belongsTo(TipoVeiculo::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }

    public function combustivel()
    {
        return $this->belongsTo(Combustivel::class);
    }

}
