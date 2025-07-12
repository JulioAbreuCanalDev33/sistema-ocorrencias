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
        Schema::create('tabela_prestadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_prestador');
            $table->string('equipes')->nullable();
            $table->string('servico_prestador');
            $table->string('cpf_prestador', 14)->unique();
            $table->string('rg_prestador', 20)->nullable();
            $table->string('email_prestador')->unique();
            $table->string('telefone_1_prestador', 15);
            $table->string('telefone_2_prestador', 15)->nullable();
            $table->string('cep_prestador', 10);
            $table->string('endereco_prestador');
            $table->string('numero_prestador', 10);
            $table->string('bairro_prestador', 100);
            $table->string('cidade_prestador', 100);
            $table->char('estado_prestador', 2);
            $table->text('observacao')->nullable();
            $table->string('documento_prestador')->nullable();
            $table->string('foto_prestador')->nullable();
            $table->string('codigo_do_banco', 10);
            $table->string('pix_banco_prestadores')->nullable();
            $table->string('titular_conta');
            $table->string('tipo_de_conta', 50);
            $table->string('agencia_prestadores', 20);
            $table->string('digito_agencia_prestadores', 5)->nullable();
            $table->string('conta_prestadores', 20);
            $table->string('digito_conta_prestadores', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabela_prestadores');
    }
};

