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
        Schema::create('rondas_periodicas', function (Blueprint $table) {
            $table->id('id_ronda');
            $table->unsignedBigInteger('id_atendimento')->nullable();
            $table->integer('quantidade_rondas')->nullable();
            $table->date('data_final')->nullable();
            $table->enum('pagamento', ['Pago', 'Pendente'])->nullable();
            $table->enum('contato_no_local', ['Sim', 'Não'])->nullable();
            $table->string('nome_local', 100)->nullable();
            $table->string('funcao_local', 100)->nullable();
            $table->enum('verificado_fiacao', ['Sim', 'Não'])->nullable();
            $table->enum('quadro_eletrico', ['Sim', 'Não'])->nullable();
            $table->enum('verificado_portas_entradas', ['Sim', 'Não'])->nullable();
            $table->enum('local_energizado', ['Sim', 'Não'])->nullable();
            $table->enum('sirene_disparada', ['Sim', 'Não'])->nullable();
            $table->enum('local_violado', ['Sim', 'Não'])->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();

            $table->foreign('id_atendimento')->references('id_atendimento')->on('atendimentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rondas_periodicas');
    }
};

