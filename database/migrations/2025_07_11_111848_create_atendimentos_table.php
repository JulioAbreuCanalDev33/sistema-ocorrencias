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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id('id_atendimento');
            $table->string('solicitante', 100)->nullable();
            $table->text('motivo')->nullable();
            $table->decimal('valor_patrimonial', 12, 2)->nullable();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->string('conta', 50)->nullable();
            $table->string('id_validacao', 50)->nullable();
            $table->string('filial', 50)->nullable();
            $table->string('ordem_servico', 50)->nullable();
            $table->string('cep', 9)->nullable();
            $table->char('estado', 2)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero', 10)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->text('agentes_aptos')->nullable();
            $table->unsignedBigInteger('id_agente')->nullable();
            $table->string('equipe', 100)->nullable();
            $table->string('responsavel', 100)->nullable();
            $table->string('estabelecimento', 100)->nullable();
            $table->time('hora_solicitada')->nullable();
            $table->datetime('hora_local')->nullable();
            $table->datetime('hora_saida')->nullable();
            $table->enum('status_atendimento', ['Em andamento', 'Finalizado'])->nullable();
            $table->enum('tipo_de_servico', ['Ronda', 'Preservação'])->nullable();
            $table->string('tipos_de_dados', 100)->nullable();
            $table->time('estabelecida_inicio')->nullable();
            $table->time('estabelecida_fim')->nullable();
            $table->boolean('indeterminado')->default(false);
            $table->timestamps();

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('set null');
            $table->foreign('id_agente')->references('id_agente')->on('agentes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};

