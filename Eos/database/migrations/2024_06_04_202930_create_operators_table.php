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
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('cognome',150)->nullable();
            $table->unsignedTinyInteger('unilav_id')->nullable();
            $table->foreign('unilav_id')->references('id')->on('unilavs');
            $table->unsignedTinyInteger('mansione_lavorators_id')->nullable();
            $table->foreign('mansione_lavorators_id')->references('id')->on('mansionelavorators');
            $table->date('idoneitàSanitaria')->nullable();
            $table->date('formazioneBase')->nullable();
            $table->boolean('informazione')->nullable();
            $table->date('nominaRls')->nullable();
            $table->date('formazioneRls')->nullable();
            $table->date('nominaRspp')->nullable();
            $table->date('formazioneRspp')->nullable();
            $table->date('inailRls')->nullable();
            $table->date('nominaPreposto')->nullable();
            $table->date('formazionePreposto')->nullable();
            $table->date('nominaAntincendio')->nullable();
            $table->date('formazioneAntincendio')->nullable();
            $table->date('nominaPrimoSoccorso')->nullable();
            $table->date('formazionePrimoSoccorso')->nullable();
            $table->date('formazioneEscavatorista')->nullable();            
            $table->date('formazioneGruista')->nullable();
            $table->date('formazionePes')->nullable();
            $table->date('nominaPes')->nullable();
            $table->date('formazioneDPI3CAT')->nullable();
            $table->date('formazionePonteggiatore')->nullable();
            $table->date('formazioneGas')->nullable();
            $table->date('formazioneAsic')->nullable();
            $table->date('nominaAsic')->nullable();
            $table->date('formazioneSegnaleticaLavoratore')->nullable();
            $table->date('formazioneSegnaleticaPreposto')->nullable();
            $table->boolean('tesserino')->nullable();
            $table->date('verbaleDPI')->nullable();
            $table->date('formazioneTrattorista')->nullable();
            $table->date('formazionePle')->nullable();
            $table->date('formazioneCarrellista')->nullable();
            $table->date('formazionePav')->nullable();
            $table->date('nominaPei')->nullable();
            $table->date('formazionePei')->nullable();
            $table->date('formazioneProfiloC')->nullable();
            $table->date('formazioneProfiloD')->nullable();
            $table->date('formazioneProfiloE')->nullable();
            $table->date('formazioneProfiloF')->nullable();
            $table->date('formazioneProfiloG')->nullable();
            $table->date('formazioneProfiloX')->nullable();
            $table->date('formazioneProfiloY')->nullable();
            $table->date('formazioneProfiloZ')->nullable();
            $table->date('documentoDiRiconoscimento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('operators', function (Blueprint $table) {
            $table->dropForeign(['unilav_id']);
            $table->dropForeign(['mansione_lavorators_id']);
        });

        Schema::dropIfExists('operators');
    }
};
