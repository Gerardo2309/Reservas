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
        Schema::create('paxes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('adults');
            $table->integer('kids');
            $table->integer('q');
            $table->integer('nq');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paxes');
    }
};
