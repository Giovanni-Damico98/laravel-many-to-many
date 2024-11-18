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
        Schema::create('project_technology', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('project_id');
            // $table->foreign('project_id')->references('id')->on('projects');

            // metodo abbreviato di quanto scritto nelle due righe sopra
            $table->foreignId('project_id')->constrained()->onDelete('cascade');

            // $table->unsignedBigInteger('technology_id');
            // $table->foreign('technology_id')->references('id')->on('technology');

            // metodo abbreviato di quanto scritto nelle due righe sopra
            $table->foreignId('technology_id')->constrained('technology')->onDelete('cascade');

            $table->primary(['project_id', 'technology_id']);

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
