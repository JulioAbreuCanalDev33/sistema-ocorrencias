<?php

namespace App\Exports;

use App\Models\VigilanciaVeicular;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VigilanciaExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    public function collection()
    {
        return VigilanciaVeicular::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Veículo Recuperado',
            'Condutor é Proprietário',
            'Placa',
            'Marca',
            'Modelo',
            'Cidade',
            'Nome do Condutor',
            'CPF Condutor',
            'Status do Atendimento',
            'Data de Cadastro',
        ];
    }

    public function map($vigilancia): array
    {
        return [
            $vigilancia->id,
            $vigilancia->veiculo_foi_recuperado,
            $vigilancia->condutor_e_proprietario,
            $vigilancia->placa,
            $vigilancia->marca,
            $vigilancia->modelo,
            $vigilancia->cidade,
            $vigilancia->nome_do_condutor,
            $vigilancia->cpf_condutor,
            $vigilancia->status_do_atendimento,
            $vigilancia->created_at ? $vigilancia->created_at->format('d/m/Y H:i') : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

