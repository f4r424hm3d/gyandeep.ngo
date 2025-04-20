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
    Schema::create('leads', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email')->nullable();
      $table->string('country_code')->nullable();
      $table->string('mobile')->nullable();
      $table->string('nationality')->nullable();
      $table->string('city')->nullable();
      $table->string('country')->nullable();
      $table->boolean('have_passport')->nullable(); // true/false
      $table->boolean('neet_qualified')->nullable(); // true/false
      $table->text('marksheet')->nullable(); // file path
      $table->text('passport')->nullable(); // file path
      $table->text('income_certificate')->nullable(); // file path
      $table->string('subject')->nullable();
      $table->text('message')->nullable();
      $table->string('source')->nullable();
      $table->string('source_path')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('leads');
  }
};
