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
        Schema::create('sub_contractors', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->autoIncrement()->primary();
            $table->string('nome',150)->nullable();
            $table->unsignedTinyInteger('generale_id');
            $table->foreign('generale_id')->references('id')->on('generals');
            $table->unsignedBigInteger('operatori_id');
            $table->foreign('operatori_id')->references('id')->on('operators');
            $table->unsignedTinyInteger('ponteggi_id')->nullable();
            $table->foreign('ponteggi_id')->references('id')->on('scaffoldings');
            $table->unsignedBigInteger('mezzi_id');
            $table->foreign('mezzi_id')->references('id')->on('cars');
            $table->unsignedTinyInteger('POS_id')->nullable();
            $table->foreign('POS_id')->references('id')->on('pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_contractors');
    }
};
