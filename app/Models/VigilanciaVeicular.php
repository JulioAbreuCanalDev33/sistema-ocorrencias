<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VigilanciaVeicular extends Model
{
    use HasFactory;

    protected $table = 'vigilancia_veicular';

    protected $fillable = [
        'veiculo_foi_recuperado',
        'condutor_e_proprietario',
        'tipo_de_equipamento_embarcado',
        'placa',
        'renavam',
        'cor',
        'marca',
        'modelo',
        'cidade',
        'dados_adicionais_veiculo',
        'placa_carreta',
        'renavam_carreta',
        'cor_carreta',
        'marca_carreta',
        'modelo_carreta',
        'cidade_carreta',
        'dados_adicionais_carreta',
        'nome_do_condutor',
        'cpf_condutor',
        'cnh_condutor',
        'telefone_condutor',
        'status_do_atendimento',
    ];

    public function fotos()
    {
        return $this->hasMany(FotoVigilanciaVeicular::class, 'vigilancia_id');
    }
}

