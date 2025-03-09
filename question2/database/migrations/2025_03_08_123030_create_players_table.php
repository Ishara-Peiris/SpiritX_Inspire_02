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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('university')->nullable();
            $table->enum('category', ['Batsman', 'Bowler', 'All-rounder', 'Wicketkeeper']);
            $table->string('image')->nullable();
            $table->integer('total_runs')->default(0);
            $table->integer('balls_faced')->default(0);
            $table->integer('innings_played')->default(0);
            $table->integer('wickets')->default(0);
            $table->float('overs_bowled', 8, 2)->default(0);
            $table->integer('runs_conceded')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
