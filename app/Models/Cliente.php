<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nome_empresa',
        'cnpj',
        'contato',
        'endereco',
        'telefone',
    ];

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class, 'id_cliente', 'id_cliente');
    }
}

