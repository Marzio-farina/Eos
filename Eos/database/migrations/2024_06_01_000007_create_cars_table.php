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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('subAppaltatrice_id')->nullable();
            $table->string('matricola',100)->nullable();
            $table->string('descrizione',150)->nullable();
            $table->string('marca',100)->nullable();
            $table->date('revisione')->nullable();
            $table->boolean('manuale')->default(false);
            $table->boolean('dichiarazioneDiConformità')->default(false);
            $table->date('assicurazione')->nullable();
            $table->date('verificaArpa')->nullable();
            $table->date('iscrizioneANGA')->nullable();
            $table->boolean('proprietà')->default(false);
            $table->date('leasing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
