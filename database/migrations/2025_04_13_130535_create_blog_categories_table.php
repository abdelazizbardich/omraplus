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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->unique();
            $table->string('slug_ar')->unique();
            $table->string('description_ar')->nullable();

            $table->string('name_en')->unique();
            $table->string('slug_en')->unique();
            $table->string('description_en')->nullable();

            $table->string('name_fr')->unique();
            $table->string('slug_fr')->unique();
            $table->string('description_fr')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};
