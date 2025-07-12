<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoAtendimento extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_foto';

    protected $fillable = [
        'id_atendimento',
        'legenda',
        'caminho_foto',
        'data_upload',
    ];

    protected $casts = [
        'data_upload' => 'datetime',
    ];

    public function atendimento()
    {
        return $this->belongsTo(Atendimento::class, 'id_atendimento', 'id_atendimento');
    }
}

