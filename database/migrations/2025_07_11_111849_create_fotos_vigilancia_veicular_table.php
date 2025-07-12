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
        Schema::create('fotos_vigilancia_veicular', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vigilancia_id')->nullable();
            $table->string('legenda')->nullable();
            $table->string('foto')->nullable();
            $table->datetime('data_upload')->default(now());
            $table->timestamps();

            $table->foreign('vigilancia_id')->references('id')->on('vigilancia_veicular')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos_vigilancia_veicular');
    }
};

