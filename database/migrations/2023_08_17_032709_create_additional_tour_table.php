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
        Schema::create('additional_tour', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('additional_id');
            $table->unsignedBigInteger('tour_id');
            $table->boolean('status');
            $table->foreign('additional_id')->references('id')->on('additionals')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_tour');
    }
};
