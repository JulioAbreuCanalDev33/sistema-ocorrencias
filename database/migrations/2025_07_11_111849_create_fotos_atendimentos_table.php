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
        Schema::create('fotos_atendimentos', function (Blueprint $table) {
            $table->id('id_foto');
            $table->unsignedBigInteger('id_atendimento')->nullable();
            $table->string('legenda')->nullable();
            $table->string('caminho_foto')->nullable();
            $table->datetime('data_upload')->default(now());
            $table->timestamps();

            $table->foreign('id_atendimento')->references('id_atendimento')->on('atendimentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos_atendimentos');
    }
};

