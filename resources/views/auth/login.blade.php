@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-5">
            <div class="card-custom">
                <div class="card-header text-center">
                    <i class="fas fa-shield-alt fa-2x mb-2"></i>
                    <h4 class="mb-0">{{ __('Login') }}</h4>
                    <p class="mb-0 text-light">Sistema de Ocorrências Veiculares</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label-custom">{{ __('E-Mail Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input id="email" type="email" class="form-control form-control-custom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite seu e-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label-custom">{{ __('Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input id="password" type="password" class="form-control form-control-custom @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite sua senha">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary-custom">
                                <i class="fas fa-sign-in-alt me-2"></i>
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center bg-light">
                    <small class="text-muted">
                        Não tem uma conta? 
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            Registre-se aqui
                        </a>
                    </small>
                </div>
            </div>

            <!-- Informações do sistema -->
            <div class="text-center mt-4">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <h6 class="text-primary mb-3">
                            <i class="fas fa-info-circle me-2"></i>
                            Tipos de Usuário
                        </h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="badge bg-warning text-dark p-2 w-100">
                                    <i class="fas fa-crown me-1"></i>
                                    Administrador
                                </div>
                                <small class="text-muted d-block mt-1">Acesso completo</small>
                            </div>
                            <div class="col-6">
                                <div class="badge bg-primary p-2 w-100">
                                    <i class="fas fa-user me-1"></i>
                                    Usuário Normal
                                </div>
                                <small class="text-muted d-block mt-1">Acesso básico</small>
                            </div>
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

