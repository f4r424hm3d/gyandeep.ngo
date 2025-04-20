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
    Schema::table('users', function (Blueprint $table) {
      $table->string('slug')->nullable()->after('name');
      $table->bigInteger('mobile')->nullable()->after('email');
      $table->string('role', 50)->after('remember_token');
      $table->bigInteger('login_count')->nullable()->after('role');
      $table->string('os', 100)->nullable()->after('login_count');
      $table->string('browser', 100)->nullable()->after('login_count');
      $table->string('browser_version', 100)->nullable()->after('login_count');
      $table->string('ip_address', 100)->nullable()->after('login_count');
      $table->string('mac', 100)->nullable()->after('login_count');
      $table->boolean('status')->default('0')->after('login_count');
      $table->text('profile_picture')->nullable()->after('status');
      $table->dateTime('last_login')->nullable()->after('status');
      $table->integer('otp')->nullable()->after('last_login');
      $table->string('otp_expire_at', 40)->nullable()->after('last_login');
      $table->longText('shortnote')->nullable()->after('last_login');
      $table->longText('highlights')->nullable()->after('shortnote');
      $table->longText('experiance')->nullable()->after('shortnote');
      $table->longText('education')->nullable()->after('shortnote');
      $table->string('designation')->nullable()->after('shortnote');
      $table->text('languages')->nullable()->after('shortnote');
      $table->string('branch')->nullable()->after('shortnote');
      $table->string('department')->nullable()->after('shortnote');
      $table->string('experience_short')->nullable()->after('shortnote');
      $table->longText('experience_description')->nullable()->after('shortnote');
      $table->integer('priority')->default(1)->after('status');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('users', function (Blueprint $table) {
      //
    });
  }
};
