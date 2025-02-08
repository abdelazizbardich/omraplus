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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->date('going_date');
            $table->date('return_date');
            $table->text('description')->nullable();
            $table->boolean('is_recommended')->default(false);
            $table->enum('type', ['hajj', 'umrah']);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('airline_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign(columns: 'airline_id')->references('id')->on('airlines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
