<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcorrenciaVeicular extends Model
{
    use HasFactory;

    protected $table = 'ocorrencias_veiculares';

    protected $fillable = [
        'cliente',
        'servico',
        'id_validacao',
        'valor_veicular',
        'cep',
        'estado',
        'cidade',
        'solicitante',
        'motivo',
        'endereco_da_ocorrencia',
        'numero',
        'latitude',
        'longitude',
        'agentes_aptos',
        'prestador',
        'equipe',
        'tipo_de_ocorrencia',
        'data_hora_evento',
        'data_hora_deslocamento',
        'data_hora_transmissao',
        'data_hora_local',
        'data_hora_inicio_atendimento',
        'data_hora_fim_atendimento',
        'franquia_hora',
        'franquia_km',
        'km_inicial_atendimento',
        'km_final_atendimento',
        'total_horas_atendimento',
        'total_km_percorrido',
        'descricao_fatos',
        'gastos_adicionais',
    ];

    protected $casts = [
        'data_hora_evento' => 'datetime',
        'data_hora_deslocamento' => 'datetime',
        'data_hora_transmissao' => 'datetime',
        'data_hora_local' => 'datetime',
        'data_hora_inicio_atendimento' => 'datetime',
        'data_hora_fim_atendimento' => 'datetime',
    ];
}

