<?php

namespace App\Exports;

use App\Models\TabelaPrestador;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PrestadoresExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    public function collection()
    {
        return TabelaPrestador::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nome',
            'Serviço',
            'CPF',
            'Email',
            'Telefone 1',
            'Cidade',
            'Estado',
            'Código do Banco',
            'Titular da Conta',
            'Tipo de Conta',
            'Data de Cadastro',
        ];
    }

    public function map($prestador): array
    {
        return [
            $prestador->id,
            $prestador->nome_prestador,
            $prestador->servico_prestador,
            $prestador->cpf_prestador,
            $prestador->email_prestador,
            $prestador->telefone_1_prestador,
            $prestador->cidade_prestador,
            $prestador->estado_prestador,
            $prestador->codigo_do_banco,
            $prestador->titular_conta,
            $prestador->tipo_de_conta,
            $prestador->created_at ? $prestador->created_at->format('d/m/Y H:i') : '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

