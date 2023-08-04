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
        Schema::create('login_credentials', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->unsignedBigInteger('user_id');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('verified')->default('no');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_credentials');
    }
};
