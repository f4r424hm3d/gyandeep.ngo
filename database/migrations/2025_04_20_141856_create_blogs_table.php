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
    Schema::create('blogs', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug');
      $table->longText('description');
      $table->text('thumbnail_path');
      $table->unsignedBigInteger('category_id');
      $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
      $table->unsignedBigInteger('author_id');
      $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
      $table->text('meta_title')->nullable();
      $table->longText('meta_keyword')->nullable();
      $table->longText('meta_description')->nullable();
      $table->decimal('seo_rating', 2, 1)->nullable();
      $table->decimal('best_rating', 2, 1)->nullable();
      $table->integer('review_number')->nullable();
      $table->text('og_image_path')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('blogs');
  }
};
