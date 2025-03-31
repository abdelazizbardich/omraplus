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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            // en
            $table->string('name_en');
            // fr
            $table->string('name_fr');
            // ar
            $table->string('name_ar');

            $table->string('code');

            $table->enum('type', ['percentage', 'fixed']);
            $table->decimal('value', 10, 2)->default(0);
            $table->unsignedBigInteger('program_id');
            $table->timestamps();

            $table->foreign(columns: 'program_id')->references('id')->on('programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
