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
            $table->string('nome',100)->nullable();
            $table->text('descrizione')->nullable();
            $table->string('CIG',30)->nullable();
            $table->unsignedTinyInteger('subAppaltatrice_id')->nullable();
            $table->foreign('subAppaltatrice_id')->references('id')->on('sub_contractors');
            $table->unsignedBigInteger('committenza_id')->nullable();
            $table->foreign('committenza_id')->references('id')->on('clients');
            $table->date('invioRichiesta')->nullable();
            $table->date('ricevutaRichiesta')->nullable();
            $table->unsignedTinyInteger('sollecito_id')->nullable();
            $table->foreign('sollecito_id')->references('id')->on('reminders');
            $table->unsignedTinyInteger('statoCommessa_id')->default('1');
            $table->foreign('statoCommessa_id')->references('id')->on('status_orders');
            $table->date('dataInvioAlCSE')->nullable();
            $table->unsignedTinyInteger('referentiCebat_id')->nullable();
            $table->foreign('referentiCebat_id')->references('id')->on('cebat_contacts');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
