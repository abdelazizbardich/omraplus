<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('partner_id')->nullable()->after('user_id');
            $table->decimal('commission_amount', 10, 2)->nullable()->after('total_price');
            $table->boolean('commission_paid')->default(false)->after('commission_amount');
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['partner_id']);
            $table->dropColumn(['partner_id', 'commission_amount', 'commission_paid']);
        });
    }
};
