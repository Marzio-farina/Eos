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
        Schema::create('generals', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->autoIncrement()->primary();
            $table->boolean('DVR')->default(false);
            $table->boolean('DURC')->default(false);
            $table->boolean('CCIA')->default(false);
            $table->boolean('VCCIA')->default(false);
            $table->boolean('nominaMedicoCompetente')->default(false);
            $table->boolean('nominaRLST')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
