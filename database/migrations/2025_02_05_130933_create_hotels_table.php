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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();

            // en
            $table->string('name_en');
            $table->string('slug_en')->unique();
            $table->string('address_en');

            // fr
            $table->string('name_fr');
            $table->string('slug_fr')->unique();
            $table->string('address_fr');

            // ar
            $table->string('name_ar');
            $table->string('slug_ar')->unique();
            $table->string('address_ar');

            $table->string('city');
            $table->string('distance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
