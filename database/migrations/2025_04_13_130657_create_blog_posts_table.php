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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            $table->string('title_ar');
            $table->string('slug_ar')->unique_ar();
            $table->text('content_ar');
            $table->text('excerpt_ar')->nullable_ar();

            $table->string('title_en');
            $table->string('slug_en')->unique_en();
            $table->text('content_en');
            $table->text('excerpt_en')->nullable_en();

            $table->string('title_fr');
            $table->string('slug_fr')->unique_fr();
            $table->text('content_fr');
            $table->text('excerpt_fr')->nullable_fr();
            
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_published')->default(false);
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
