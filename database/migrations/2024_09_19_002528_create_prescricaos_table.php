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
        Schema::create('prescricaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("paciente_id");
            $table->foreign("paciente_id")
            ->references("id")
            ->on("pacientes")
            ->onDelete("restrict");
            $table->date("data_prescricao");
            $table->text("descricao_prescricao");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescricaos');
    }
};