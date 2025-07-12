<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\RondaPeriodicaController;
use App\Http\Controllers\OcorrenciaVeicularController;
use App\Http\Controllers\VigilanciaVeicularController;
use App\Http\Controllers\TabelaPrestadorController;
use App\Http\Controllers\RelatorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rotas básicas
    Route::resource('clientes', ClienteController::class);
    Route::resource('agentes', AgenteController::class);
    Route::resource('atendimentos', AtendimentoController::class);
    Route::resource('rondas', RondaPeriodicaController::class);
    Route::resource('ocorrencias', OcorrenciaVeicularController::class);
    Route::resource('vigilancia', VigilanciaVeicularController::class);

    // Rotas de relatórios
    Route::prefix('relatorios')->name('relatorios.')->group(function () {
        Route::get('/', [RelatorioController::class, 'index'])->name('index');

        // Clientes
        Route::get('/clientes/pdf', [RelatorioController::class, 'exportarClientesPDF'])->name('clientes.pdf');
        Route::get('/clientes/excel', [RelatorioController::class, 'exportarClientesExcel'])->name('clientes.excel');

        // Agentes
        Route::get('/agentes/pdf', [RelatorioController::class, 'exportarAgentesPDF'])->name('agentes.pdf');
        Route::get('/agentes/excel', [RelatorioController::class, 'exportarAgentesExcel'])->name('agentes.excel');

        // Atendimentos
        Route::get('/atendimentos/pdf', [RelatorioController::class, 'exportarAtendimentosPDF'])->name('atendimentos.pdf');
        Route::get('/atendimentos/excel', [RelatorioController::class, 'exportarAtendimentosExcel'])->name('atendimentos.excel');

        // Ocorrências
        Route::get('/ocorrencias/pdf', [RelatorioController::class, 'exportarOcorrenciasPDF'])->name('ocorrencias.pdf');
        Route::get('/ocorrencias/excel', [RelatorioController::class, 'exportarOcorrenciasExcel'])->name('ocorrencias.excel');

        // Vigilância
        Route::get('/vigilancia/pdf', [RelatorioController::class, 'exportarVigilanciaPDF'])->name('vigilancia.pdf');
        Route::get('/vigilancia/excel', [RelatorioController::class, 'exportarVigilanciaExcel'])->name('vigilancia.excel');

        // Prestadores (apenas admin)
        Route::middleware(['admin'])->group(function () {
            Route::get('/prestadores/pdf', [RelatorioController::class, 'exportarPrestadoresPDF'])->name('prestadores.pdf');
            Route::get('/prestadores/excel', [RelatorioController::class, 'exportarPrestadoresExcel'])->name('prestadores.excel');
        });
    });

    // Rotas administrativas
    Route::middleware(['admin'])->group(function () {
        Route::resource('prestadores', TabelaPrestadorController::class);
    });
});

