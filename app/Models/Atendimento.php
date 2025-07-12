<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_atendimento';

    protected $fillable = [
        'solicitante',
        'motivo',
        'valor_patrimonial',
        'id_cliente',
        'conta',
        'id_validacao',
        'filial',
        'ordem_servico',
        'cep',
        'estado',
        'cidade',
        'endereco',
        'numero',
        'latitude',
        'longitude',
        'agentes_aptos',
        'id_agente',
        'equipe',
        'responsavel',
        'estabelecimento',
        'hora_solicitada',
        'hora_local',
        'hora_saida',
        'status_atendimento',
        'tipo_de_servico',
        'tipos_de_dados',
        'estabelecida_inicio',
        'estabelecida_fim',
        'indeterminado',
    ];

    protected $casts = [
        'hora_solicitada' => 'datetime',
        'hora_local' => 'datetime',
        'hora_saida' => 'datetime',
        'estabelecida_inicio' => 'datetime',
        'estabelecida_fim' => 'datetime',
        'indeterminado' => 'boolean',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }

    public function agente()
    {
        return $this->belongsTo(Agente::class, 'id_agente', 'id_agente');
    }

    public function rondasPeriodicas()
    {
        return $this->hasMany(RondaPeriodica::class, 'id_atendimento', 'id_atendimento');
    }

    public function fotos()
    {
        return $this->hasMany(FotoAtendimento::class, 'id_atendimento', 'id_atendimento');
    }
}

