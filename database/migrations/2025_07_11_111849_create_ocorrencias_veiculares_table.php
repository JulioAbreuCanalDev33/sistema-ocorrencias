<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ocorrencias_veiculares', function (Blueprint $table) {
            $table->id();
            $table->string('cliente', 100)->nullable();
            $table->string('servico', 100)->nullable();
            $table->string('id_validacao', 50)->nullable();
            $table->decimal('valor_veicular', 10, 2)->nullable();
            $table->string('cep', 10)->nullable();
            $table->char('estado', 2)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('solicitante', 100)->nullable();
            $table->text('motivo')->nullable();
            $table->string('endereco_da_ocorrencia')->nullable();
            $table->string('numero', 10)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->text('agentes_aptos')->nullable();
            $table->string('prestador', 100)->nullable();
            $table->string('equipe', 100)->nullable();
            $table->text('tipo_de_ocorrencia')->nullable();
            $table->datetime('data_hora_evento')->nullable();
            $table->datetime('data_hora_deslocamento')->nullable();
            $table->datetime('data_hora_transmissao')->nullable();
            $table->datetime('data_hora_local')->nullable();
            $table->datetime('data_hora_inicio_atendimento')->nullable();
            $table->datetime('data_hora_fim_atendimento')->nullable();
            $table->time('franquia_hora')->nullable();
            $table->decimal('franquia_km', 10, 2)->nullable();
            $table->decimal('km_inicial_atendimento', 10, 2)->nullable();
            $table->decimal('km_final_atendimento', 10, 2)->nullable();
            $table->time('total_horas_atendimento')->nullable();
            $table->decimal('total_km_percorrido', 10, 2)->nullable();
            $table->text('descricao_fatos')->nullable();
            $table->decimal('gastos_adicionais', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorrencias_veiculares');
    }
};

