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
        Schema::create('mysongs', function (Blueprint $table) {
            $table->id();
            $table->text('Titulo');
            $table->text('Autor');
            $table->string('Album');
            $table->string('Fecha');
            $table->string('Duracion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mysongs');
    }
};
