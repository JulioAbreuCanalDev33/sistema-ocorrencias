<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bem-vindo ao Sistema PR7</h1>

    <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('prestadores.index') }}">Prestadores</a></li>
        <li class="list-group-item"><a href="{{ route('clientes.index') }}">Clientes</a></li>
        <li class="list-group-item"><a href="{{ route('agentes.index') }}">Agentes</a></li>
        <li class="list-group-item"><a href="{{ route('atendimentos.index') }}">Atendimentos</a></li>
        <li class="list-group-item"><a href="{{ route('ocorrencias.index') }}">Ocorrências Veiculares</a></li>
        <li class="list-group-item"><a href="{{ route('vigilancias.index') }}">Vigilância Veicular</a></li>
    </ul>
</div>
@endsection
