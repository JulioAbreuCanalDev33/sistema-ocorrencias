@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-custom mb-4">
                <div class="card-header">
                    <i class="fas fa-file-export me-2"></i>
                    Relatórios do Sistema
                </div>
                <div class="card-body">
                    <p class="lead">Gere relatórios em PDF ou Excel dos dados do sistema.</p>
                </div>
            </div>

            <!-- Relatórios Básicos -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <h4 class="text-primary mb-3">
                        <i class="fas fa-chart-bar me-2"></i>
                        Relatórios Básicos
                    </h4>
                </div>

                <!-- Clientes -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card-custom">
                        <div class="card-body text-center">
                            <i class="fas fa-building display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text text-muted">Relatório de todas as empresas cadastradas</p>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('relatorios.clientes.pdf') }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                </a>
                                <a href="{{ route('relatorios.clientes.excel') }}" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-file-excel me-1"></i>Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agentes -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card-custom">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Agentes</h5>
                            <p class="card-text text-muted">Relatório da equipe de campo</p>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('relatorios.agentes.pdf') }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                </a>
                                <a href="{{ route('relatorios.agentes.excel') }}" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-file-excel me-1"></i>Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Atendimentos -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card-custom">
                        <div class="card-body text-center">
                            <i class="fas fa-tasks display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Atendimentos</h5>
                            <p class="card-text text-muted">Relatório de todos os atendimentos</p>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('relatorios.atendimentos.pdf') }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                </a>
                                <a href="{{ route('relatorios.atendimentos.excel') }}" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-file-excel me-1"></i>Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Relatórios Veiculares -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <h4 class="text-primary mb-3">
                        <i class="fas fa-car me-2"></i>
                        Relatórios Veiculares
                    </h4>
                </div>

                <!-- Ocorrências -->
                <div class="col-md-6 mb-3">
                    <div class="card-custom">
                        <div class="card-body text-center">
                            <i class="fas fa-exclamation-triangle display-4 text-warning mb-3"></i>
                            <h5 class="card-title">Ocorrências Veiculares</h5>
                            <p class="card-text text-muted">Relatório de todas as ocorrências registradas</p>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('relatorios.ocorrencias.pdf') }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                </a>
                                <a href="{{ route('relatorios.ocorrencias.excel') }}" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-file-excel me-1"></i>Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vigilância -->
                <div class="col-md-6 mb-3">
                    <div class="card-custom">
                        <div class="card-body text-center">
                            <i class="fas fa-eye display-4 text-info mb-3"></i>
                            <h5 class="card-title">Vigilância Veicular</h5>
                            <p class="card-text text-muted">Relatório de vigilância e recuperação</p>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('relatorios.vigilancia.pdf') }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                </a>
                                <a href="{{ route('relatorios.vigilancia.excel') }}" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-file-excel me-1"></i>Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(auth()->user()->isAdmin())
            <!-- Relatórios Administrativos -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <h4 class="text-warning mb-3">
                        <i class="fas fa-crown me-2"></i>
                        Relatórios Administrativos
                    </h4>
                </div>

                <!-- Prestadores -->
                <div class="col-md-6 mb-3">
                    <div class="card border-warning">
                        <div class="card-body text-center">
                            <i class="fas fa-handshake display-4 text-warning mb-3"></i>
                            <h5 class="card-title text-warning">Prestadores</h5>
                            <p class="card-text text-muted">Relatório completo dos prestadores de serviço</p>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('relatorios.prestadores.pdf') }}" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                </a>
                                <a href="{{ route('relatorios.prestadores.excel') }}" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-file-excel me-1"></i>Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Relatório Geral -->
                <div class="col-md-6 mb-3">
                    <div class="card border-success">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-pie display-4 text-success mb-3"></i>
                            <h5 class="card-title text-success">Relatório Geral</h5>
                            <p class="card-text text-muted">Relatório consolidado de todo o sistema</p>
                            <button class="btn btn-outline-success w-100" onclick="alert('Funcionalidade em desenvolvimento')">
                                <i class="fas fa-download me-1"></i>Gerar Relatório
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Informações -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-custom">
                        <div class="card-header">
                            <i class="fas fa-info-circle me-2"></i>
                            Informações sobre Relatórios
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-primary">Formato PDF</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Ideal para impressão</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Layout formatado</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Fácil compartilhamento</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-success">Formato Excel</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Dados editáveis</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Análise de dados</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Filtros e ordenação</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

