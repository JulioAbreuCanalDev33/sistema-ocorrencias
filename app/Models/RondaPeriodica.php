<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RondaPeriodica extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ronda';

    protected $fillable = [
        'id_atendimento',
        'quantidade_rondas',
        'data_final',
        'pagamento',
        'contato_no_local',
        'nome_local',
        'funcao_local',
        'verificado_fiacao',
        'quadro_eletrico',
        'verificado_portas_entradas',
        'local_energizado',
        'sirene_disparada',
        'local_violado',
        'observacao',
    ];

    protected $casts = [
        'data_final' => 'date',
    ];

    public function atendimento()
    {
        return $this->belongsTo(Atendimento::class, 'id_atendimento', 'id_atendimento');
    }
}

