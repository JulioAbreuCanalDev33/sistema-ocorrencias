@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-custom mb-4">
                <div class="card-header">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    Dashboard - Sistema de Ocorrências Veiculares
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="text-primary mb-3">Bem-vindo Julio, {{ Auth::user()->name }}!</h4>
                            <p class="lead">
                                @if(Auth::user()->isAdmin())
                                    Você está logado como <strong>Administrador</strong> e tem acesso completo ao sistema.
                                @else
                                    Você está logado como <strong>Usuário</strong> com acesso às funcionalidades básicas.
                                @endif
                            </p>
                        </div>
                        <div class="col-md-4 text-end">
                            <div class="badge bg-primary fs-6 p-3">
                                <i class="fas fa-calendar me-2"></i>
                                {{ date('d/m/Y H:i') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards de estatísticas -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card-custom text-center">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-2">
                                <i class="fas fa-building"></i>
                            </div>
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text text-muted">Gerenciar empresas</p>
                            <a href="{{ route('clientes.index') }}" class="btn btn-primary-custom">
                                <i class="fas fa-eye me-1"></i>Visualizar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom text-center">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-2">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h5 class="card-title">Agentes</h5>
                            <p class="card-text text-muted">Equipe de campo</p>
                            <a href="{{ route('agentes.index') }}" class="btn btn-primary-custom">
                                <i class="fas fa-eye me-1"></i>Visualizar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom text-center">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-2">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <h5 class="card-title">Atendimentos</h5>
                            <p class="card-text text-muted">Ocorrências ativas</p>
                            <a href="{{ route('atendimentos.index') }}" class="btn btn-primary-custom">
                                <i class="fas fa-eye me-1"></i>Visualizar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom text-center">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-2">
                                <i class="fas fa-car"></i>
                            </div>
                            <h5 class="card-title">Veicular</h5>
                            <p class="card-text text-muted">Ocorrências veiculares</p>
                            <a href="{{ route('ocorrencias.index') }}" class="btn btn-primary-custom">
                                <i class="fas fa-eye me-1"></i>Visualizar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @if(Auth::user()->isAdmin())
            <!-- Seção exclusiva para administradores -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card-custom">
                        <div class="card-header">
                            <i class="fas fa-crown me-2"></i>
                            Área Administrativa
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-warning">
                                        <div class="card-body text-center">
                                            <i class="fas fa-handshake display-4 text-warning mb-2"></i>
                                            <h5>Prestadores</h5>
                                            <p class="text-muted">Gerenciar prestadores de serviço</p>
                                            <a href="{{ route('prestadores.index') }}" class="btn btn-outline-warning">
                                                <i class="fas fa-cog me-1"></i>Gerenciar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-info">
                                        <div class="card-body text-center">
                                            <i class="fas fa-file-export display-4 text-info mb-2"></i>
                                            <h5>Relatórios</h5>
                                            <p class="text-muted">Exportar dados em PDF/Excel</p>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-outline-info btn-sm">
                                                    <i class="fas fa-file-pdf me-1"></i>PDF
                                                </button>
                                                <button type="button" class="btn btn-outline-info btn-sm">
                                                    <i class="fas fa-file-excel me-1"></i>Excel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-success">
                                        <div class="card-body text-center">
                                            <i class="fas fa-users-cog display-4 text-success mb-2"></i>
                                            <h5>Usuários</h5>
                                            <p class="text-muted">Gerenciar usuários do sistema</p>
                                            <button type="button" class="btn btn-outline-success">
                                                <i class="fas fa-users me-1"></i>Gerenciar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Ações rápidas -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card-custom">
                        <div class="card-header">
                            <i class="fas fa-bolt me-2"></i>
                            Ações Rápidas
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('atendimentos.create') }}" class="btn btn-primary-custom w-100 py-3">
                                        <i class="fas fa-plus-circle me-2"></i>
                                        Novo Atendimento
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('ocorrencias.create') }}" class="btn btn-outline-primary-custom w-100 py-3">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        Nova Ocorrência
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('vigilancia.create') }}" class="btn btn-outline-primary-custom w-100 py-3">
                                        <i class="fas fa-eye me-2"></i>
                                        Nova Vigilância
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('clientes.create') }}" class="btn btn-outline-primary-custom w-100 py-3">
                                        <i class="fas fa-building me-2"></i>
                                        Novo Cliente
                                    </a>
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

