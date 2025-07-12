<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_agente';

    protected $fillable = [
        'nome',
        'funcao',
        'status',
    ];

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class, 'id_agente', 'id_agente');
    }
}

