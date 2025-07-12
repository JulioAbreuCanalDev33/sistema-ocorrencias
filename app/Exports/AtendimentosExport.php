<?php

namespace App\Exports;

use App\Models\Atendimento;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AtendimentosExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    public function collection()
    {
        return Atendimento::with(['cliente', 'agente'])->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Solicitante',
            'Cliente',
            'Agente',
            'Motivo',
            'Valor Patrimonial',
            'Cidade',
            'Status',
            'Tipo de Serviço',
            'Data de Cadastro',
        ];
    }

    public function map($atendimento): array
    {
        return [
            $atendimento->id_atendimento,
            $atendimento->solicitante,
            $atendimento->cliente ? $atendimento->cliente->nome_empresa : '',
            $atendimento->agente ? $atendimento->agente->nome : '',
            $atendimento->motivo,
            $atendimento->valor_patrimonial ? 'R$ ' . number_format($atendimento->valor_patrimonial, 2, ',', '.') : '',
            $atendimento->cidade,
            $atendimento->status_atendimento,
            $atendimento->tipo_de_servico,
            $atendimento->created_at ? $atendimento->created_at->format('d/m/Y H:i') : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

