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

            // en
            $table->string('title_en');
            $table->string('slug_en')->unique();
            $table->text('description_en')->nullable();
            // fr
            $table->string('title_fr');
            $table->string('slug_fr')->unique();
            $table->text('description_fr')->nullable();
            // ar
            $table->string('title_ar');
            $table->string('slug_ar')->unique();
            $table->text('description_ar')->nullable();

            $table->date('going_date');
            $table->date('return_date');
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
