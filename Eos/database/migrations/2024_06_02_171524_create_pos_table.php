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
        Schema::create('pos', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->autoIncrement()->primary();
            $table->boolean('nominativoDatoreDiLavoro')->default(false);
            $table->boolean('indirizzo')->default(false);
            $table->boolean('riferimentiTelefonici')->default(false);
            $table->boolean('specificheAttivitàSvolte')->default(false);
            $table->boolean('nominativiDelleFigureDellaSicurezza')->default(false);
            $table->boolean('nominativoDelMedico')->default(false);
            $table->boolean('nominativoRSPP')->default(false);
            $table->boolean('nominativoPreposto')->default(false);
            $table->boolean('numeroOperatori')->default(false);
            $table->boolean('mansioniSicurezza')->default(false);
            $table->boolean('turniDiLavoro')->default(false);
            $table->boolean('elencoMezziPonteggi')->default(false);
            $table->boolean('sostanzePericolose')->default(false);
            $table->boolean('valutazioneRumore')->default(false);
            $table->boolean('rischiLavorazione')->default(false);
            $table->boolean('procedureComplementariPsc')->default(false);
            $table->boolean('DPI')->default(false);
            $table->boolean('formazioneLavoratori')->default(false);
            $table->boolean('firmaRLS')->default(false);
            $table->boolean('firmaRSPP')->default(false);
            $table->boolean('firmaMedicoCompetente')->default(false);
            $table->boolean('firmaDatoreDiLavoro')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos');
    }
};
