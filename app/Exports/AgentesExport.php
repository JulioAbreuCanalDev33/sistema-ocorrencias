<?php

namespace App\Exports;

use App\Models\Agente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AgentesExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    public function collection()
    {
        return Agente::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nome',
            'Função',
            'Status',
            'Data de Cadastro',
        ];
    }

    public function map($agente): array
    {
        return [
            $agente->id_agente,
            $agente->nome,
            $agente->funcao,
            $agente->status,
            $agente->created_at ? $agente->created_at->format('d/m/Y H:i') : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

