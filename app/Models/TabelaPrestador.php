<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelaPrestador extends Model
{
    use HasFactory;

    protected $table = 'tabela_prestadores';

    protected $fillable = [
        'nome_prestador',
        'equipes',
        'servico_prestador',
        'cpf_prestador',
        'rg_prestador',
        'email_prestador',
        'telefone_1_prestador',
        'telefone_2_prestador',
        'cep_prestador',
        'endereco_prestador',
        'numero_prestador',
        'bairro_prestador',
        'cidade_prestador',
        'estado_prestador',
        'observacao',
        'documento_prestador',
        'foto_prestador',
        'codigo_do_banco',
        'pix_banco_prestadores',
        'titular_conta',
        'tipo_de_conta',
        'agencia_prestadores',
        'digito_agencia_prestadores',
        'conta_prestadores',
        'digito_conta_prestadores',
    ];
}

