<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoVigilanciaVeicular extends Model
{
    use HasFactory;

    protected $table = 'fotos_vigilancia_veicular';

    protected $fillable = [
        'vigilancia_id',
        'legenda',
        'foto',
        'data_upload',
    ];

    protected $casts = [
        'data_upload' => 'datetime',
    ];

    public function vigilancia()
    {
        return $this->belongsTo(VigilanciaVeicular::class, 'vigilancia_id');
    }
}

