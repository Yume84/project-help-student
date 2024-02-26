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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pseudo')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('avatar_id')->nullable();
            $table->string('status')->nullable(); /*Enlever le nullable après*/
            $table->unsignedBigInteger('help_id')->nullable(); /*Enlever le nullable après*/
            $table->unsignedBigInteger('college_id')->nullable();
            $table->unsignedBigInteger('language_id')->nullable(); /*Maternelle*/
            $table->unsignedBigInteger('language_id')->nullable(); /*Seconde*/
            $table->unsignedBigInteger('language_id')->nullable(); /*Troisième*/
            $table->unsignedBigInteger('level_id')->nullable(); /*Table ou pas*/
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
