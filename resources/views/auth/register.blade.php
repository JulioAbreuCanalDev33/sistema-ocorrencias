@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8 col-lg-6">
            <div class="card-custom">
                <div class="card-header text-center">
                    <i class="fas fa-user-plus fa-2x mb-2"></i>
                    <h4 class="mb-0">{{ __('Register') }}</h4>
                    <p class="mb-0 text-light">Criar nova conta no sistema</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label-custom">{{ __('Name') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input id="name" type="text" class="form-control form-control-custom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite seu nome completo">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email" class="form-label-custom">{{ __('E-Mail Address') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control form-control-custom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu e-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="tipo_usuario" class="form-label-custom">Tipo de Usuário</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-tag"></i>
                                    </span>
                                    <select id="tipo_usuario" class="form-control form-control-custom @error('tipo_usuario') is-invalid @enderror" name="tipo_usuario" required>
                                        <option value="">Selecione o tipo de usuário</option>
                                        <option value="normal" {{ old('tipo_usuario') == 'normal' ? 'selected' : '' }}>
                                            Usuário Normal
                                        </option>
                                        <option value="admin" {{ old('tipo_usuario') == 'admin' ? 'selected' : '' }}>
                                            Administrador
                                        </option>
                                    </select>
                                    @error('tipo_usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <small class="text-muted">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Administradores têm acesso completo ao sistema
                                </small>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label-custom">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control form-control-custom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite sua senha">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password-confirm" class="form-label-custom">{{ __('Confirm Password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input id="password-confirm" type="password" class="form-control form-control-custom" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary-custom">
                                <i class="fas fa-user-plus me-2"></i>
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center bg-light">
                    <small class="text-muted">
                        Já tem uma conta? 
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            Faça login aqui
                        </a>
                    </small>
                </div>
            </div>

            <!-- Informações sobre tipos de usuário -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card border-warning">
                        <div class="card-body text-center">
                            <i class="fas fa-crown text-warning fa-2x mb-2"></i>
                            <h6 class="text-warning">Administrador</h6>
                            <ul class="list-unstyled text-start small">
                                <li><i class="fas fa-check text-success me-1"></i> Gerenciar prestadores</li>
                                <li><i class="fas fa-check text-success me-1"></i> Exportar relatórios</li>
                                <li><i class="fas fa-check text-success me-1"></i> Acesso total ao sistema</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-primary">
                        <div class="card-body text-center">
                            <i class="fas fa-user text-primary fa-2x mb-2"></i>
                            <h6 class="text-primary">Usuário Normal</h6>
                            <ul class="list-unstyled text-start small">
                                <li><i class="fas fa-check text-success me-1"></i> Gerenciar atendimentos</li>
                                <li><i class="fas fa-check text-success me-1"></i> Visualizar ocorrências</li>
                                <li><i class="fas fa-check text-success me-1"></i> Funcionalidades básicas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.min-vh-100 {
    min-height: 100vh !important;
}

body {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.card-footer {
    border-top: 1px solid var(--border-gray);
}
</style>
@endsection

