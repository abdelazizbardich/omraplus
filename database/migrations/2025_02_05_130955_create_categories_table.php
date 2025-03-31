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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // en
            $table->string('name_en');
            $table->string('slug_en')->unique();
            $table->text('description_en')->nullable();

            // ar
            $table->string('name_ar');
            $table->string('slug_ar')->unique();
            $table->text('description_ar')->nullable();

            // fr
            $table->string('name_fr');
            $table->string('slug_fr')->unique();
            $table->text('description_fr')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
