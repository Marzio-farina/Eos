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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('subAppaltatrice')->nullable();
            $table->string('commessa')->nullable();
            $table->date('invioRichiesta')->nullable();
            $table->date('ricevutaRichiesta')->nullable();
            $table->date('sollecito1')->nullable();
            $table->date('sollecito2')->nullable();
            $table->date('sollecito3')->nullable();
            $table->date('sollecito4')->nullable();
            $table->date('sollecito5')->nullable();
            $table->integer('stato')->default('0');
            $table->date('dataInvioAlCSE')->nullable();
            $table->string('referenteCebat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
