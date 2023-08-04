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
        Schema::create('item_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('variation_id')->nullable();
            $table->string('image');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes(); // Add soft delete column
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('variation_id')->references('id')->on('item_variations')->onDelete('set null');
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
        Schema::dropIfExists('item_images');
    }
};
