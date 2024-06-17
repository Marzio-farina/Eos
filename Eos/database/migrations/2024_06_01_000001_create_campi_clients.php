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
        Schema::create('campi_clients', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->autoIncrement()->primary();
            $table->string('nomeCommittente',150);
            $table->boolean('01_Allegato_8')->default(false);
            $table->boolean('02_Allegato_9')->default(false);
            $table->boolean('03_Attestati_di_formazione')->default(false);
            $table->boolean('04_Allegato_10')->default(false);
            $table->boolean('05_Mezzi_Macchinari')->default(false);
            $table->boolean('06_Attrezzature')->default(false);
            $table->boolean('07_Nomine_Figure_Responsabilità')->default(false);
            $table->boolean('08_POS_Allegati')->default(false);
            $table->boolean('09_DVR')->default(false);
            $table->boolean('10_Visura_CCIAA')->default(false);
            $table->boolean('11_Dichiarazione_CCNL')->default(false);
            $table->boolean('12_Iscrizione_Gestori_Ambientali')->default(false);
            $table->boolean('13_Dichiarazione_Cave_Discariche')->default(false);
            $table->boolean('14_SOA')->default(false);
            $table->boolean('15_White_List')->default(false);
            $table->boolean('16_Dichiarazione_art_14')->default(false);
            $table->boolean('17_Procedura_Luoghi_Confinati')->default(false);
            $table->boolean('18_Piano_Amianto')->default(false);
            $table->boolean('Generale')->default(false);
            $table->boolean('POS')->default(false);
            $table->boolean('Personale')->default(false);
            $table->boolean('Distacchi')->default(false);
            $table->boolean('Mezzi')->default(false);
            $table->boolean('Ponteggi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campi_clients');
    }
};
