<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('room_types');
        Schema::create('room_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            $table->string('name', 45)->nullable();
            $table->string('per_number', 45)->nullable();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
};
