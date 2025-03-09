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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('program_price_id');
            $table->enum(column: 'status', allowed: ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('payment_method')->nullable();
            $table->enum(column: 'payment_status', allowed: ['pending', 'approved', 'rejected'])->default('pending');
            $table->integer('pilgrims_count')->default(1);
            $table->decimal('total_price')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('program_price_id')->references('id')->on('program_prices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
