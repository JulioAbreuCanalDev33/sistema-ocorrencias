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
        Schema::create('vigilancia_veicular', function (Blueprint $table) {
            $table->id();
            $table->enum('veiculo_foi_recuperado', ['Sim', 'Não']);
            $table->enum('condutor_e_proprietario', ['Sim', 'Não']);
            $table->text('tipo_de_equipamento_embarcado')->nullable();
            $table->string('placa', 8);
            $table->string('renavam', 11)->nullable();
            $table->string('cor', 50)->nullable();
            $table->string('marca', 100)->nullable();
            $table->string('modelo', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->text('dados_adicionais_veiculo')->nullable();
            $table->string('placa_carreta', 8)->nullable();
            $table->string('renavam_carreta', 11)->nullable();
            $table->string('cor_carreta', 50)->nullable();
            $table->string('marca_carreta', 100)->nullable();
            $table->string('modelo_carreta', 100)->nullable();
            $table->string('cidade_carreta', 100)->nullable();
            $table->text('dados_adicionais_carreta')->nullable();
            $table->string('nome_do_condutor', 100)->nullable();
            $table->string('cpf_condutor', 14)->nullable();
            $table->string('cnh_condutor', 11)->nullable();
            $table->string('telefone_condutor', 15)->nullable();
            $table->enum('status_do_atendimento', ['Em andamento', 'Finalizado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vigilancia_veicular');
    }
};

