<?php

namespace App\Exports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ClientesExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    public function collection()
    {
        return Cliente::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nome da Empresa',
            'CNPJ',
            'Contato',
            'Endereço',
            'Telefone',
            'Data de Cadastro',
        ];
    }

    public function map($cliente): array
    {
        return [
            $cliente->id_cliente,
            $cliente->nome_empresa,
            $cliente->cnpj,
            $cliente->contato,
            $cliente->endereco,
            $cliente->telefone,
            $cliente->created_at ? $cliente->created_at->format('d/m/Y H:i') : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

