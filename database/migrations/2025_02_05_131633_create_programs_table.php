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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->unsignedBigInteger('hotel_id_mecca');
            $table->unsignedBigInteger('hotel_id_medina');
            $table->integer('seat_count');
            $table->boolean('have_meals')->default(false);
            
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
            $table->foreign('hotel_id_mecca')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('hotel_id_medina')->references('id')->on('hotels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
