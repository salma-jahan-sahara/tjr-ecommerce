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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('shop_owner_id');
            $table->string('address');
            $table->string('bin')->nullable();
            $table->string('tin')->nullable();
            $table->string('type')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('shop_owner_id')->references('id')->on('shop_owners')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('officials')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('login_credentials')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('login_credentials')->onDelete('set null');
            $table->foreign('deleted_by')->references('id')->on('login_credentials')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
