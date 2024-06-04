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
        Schema::create('unilav', function (Blueprint $table) {
            // $table->id();
            $table->unsignedTinyInteger('id')->autoIncrement()->primary();
            $table->boolean('presente');
            $table->date('scadenza');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unilav');
    }
};
