@extends('relatorios.base-pdf')

@section('title', 'Relatório de Clientes')

@section('content')
<div class="info-box">
    <strong>Total de Clientes:</strong> {{ $clientes->count() }}
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome da Empresa</th>
            <th>CNPJ</th>
            <th>Contato</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Data de Cadastro</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id_cliente }}</td>
            <td>{{ $cliente->nome_empresa }}</td>
            <td>{{ $cliente->cnpj }}</td>
            <td>{{ $cliente->contato }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->endereco }}</td>
            <td>{{ $cliente->created_at ? $cliente->created_at->format('d/m/Y') : '' }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Nenhum cliente encontrado</td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($clientes->count() > 0)
<div class="info-box">
    <h4>Resumo:</h4>
    <ul>
        <li>Total de registros: {{ $clientes->count() }}</li>
        <li>Clientes com CNPJ: {{ $clientes->whereNotNull('cnpj')->count() }}</li>
        <li>Clientes com telefone: {{ $clientes->whereNotNull('telefone')->count() }}</li>
    </ul>
</div>
@endif
@endsection

