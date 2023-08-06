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
        Schema::create('officials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->unsignedBigInteger('role_id');
            $table->string('gender', 20);
            $table->string('personal_phone', 15);
            $table->string('working_phone', 15)->nullable();
            $table->string('emergency_phone', 15);
            $table->string('emergency_relationship', 255);
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('nationality_certificate', 100);
            $table->string('nationality_number', 100);
            $table->integer('salary')->nullable();
            $table->unsignedBigInteger('manager')->nullable();
            $table->date('date_of_birth');
            $table->string('personal_email', 255);
            $table->string('working_email')->nullable();
            $table->string('status', 100)->nullable();
            $table->string('department', 100)->nullable();
            $table->unsignedBigInteger('approved_by');
            $table->date('joining_date');
            $table->timestamps();
            $table->softDeletes();
            $table->string('ip_address', 50)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('variation_id')->references('id')->on('item_variations')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officials');
    }
};
