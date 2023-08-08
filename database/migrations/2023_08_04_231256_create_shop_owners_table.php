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
        Schema::create('shop_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->string('gender', 10);
            $table->string('phone', 15);
            $table->string('emergency_phone', 15);
            $table->string('emergency_relationship', 255);
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->string('nationality_certificate', 100);
            $table->string('nationality_number', 100);
            $table->date('date_of_birth');
            $table->string('tin_number')->nullable();
            $table->string('bin_number')->nullable();
            $table->string('email');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->string('ip_address')->nullable();

            $table->foreign('approved_by')->references('id')->on('officials')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_owners');
    }
};
