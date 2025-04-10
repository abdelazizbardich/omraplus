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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('slug_name')->nullable();
            $table->longText('content')->nullable();
            $table->string('categorys', 100)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('type', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->text('tags')->nullable();
            $table->integer('views')->unsigned()->nullable()->default(1);
            $table->integer('shares')->unsigned()->nullable()->default(1);
            $table->integer('thumbnail')->unsigned()->nullable()->default(0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
