<?php

namespace App\Exports;

use App\Models\OcorrenciaVeicular;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OcorrenciasExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    public function collection()
    {
        return OcorrenciaVeicular::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Cliente',
            'Serviço',
            'Solicitante',
            'Valor Veicular',
            'Cidade',
            'Prestador',
            'Equipe',
            'Tipo de Ocorrência',
            'Data do Evento',
            'Data de Cadastro',
        ];
    }

    public function map($ocorrencia): array
    {
        return [
            $ocorrencia->id,
            $ocorrencia->cliente,
            $ocorrencia->servico,
            $ocorrencia->solicitante,
            $ocorrencia->valor_veicular ? 'R$ ' . number_format($ocorrencia->valor_veicular, 2, ',', '.') : '',
            $ocorrencia->cidade,
            $ocorrencia->prestador,
            $ocorrencia->equipe,
            $ocorrencia->tipo_de_ocorrencia,
            $ocorrencia->data_hora_evento ? $ocorrencia->data_hora_evento->format('d/m/Y H:i') : '',
            $ocorrencia->created_at ? $ocorrencia->created_at->format('d/m/Y H:i') : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

