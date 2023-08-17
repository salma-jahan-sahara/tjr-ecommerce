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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku', 10)->nullable();
            $table->string('brief', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('has_variation')->default('no');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->integer('selling_price')->nullable();
            $table->integer('purchase_price')->nullable();
            $table->integer('stock_in')->default(0);
            $table->integer('stock_out')->default(0);
            $table->integer('stock_available')->default(0);
            $table->integer('sold_stock')->default(0);
            $table->integer('damage_stock')->default(0);
            $table->integer('other_stock_out')->default(0);
            $table->integer('total_rate')->default(0);
            $table->unsignedInteger('total_rated_person')->default(0);
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes(); // Add soft delete column
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('set null');
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
        Schema::dropIfExists('items');
    }
};


// 'name' => 'Icecream'
// 'sku' => 'abcacb'
// 'brief' => 'abcacb'
// 'description' => 'abcacb'
// 'image' => 'abcacb'
// 'has_variation' => 'abcacb'
// 'shop_id' => 'abcacb'
// 'category_id' => 'abcacb'
// 'subcategory_id' => 'abcacb'
// 'selling_price' => 'abcacb'
// 'purchase_price' => 'abcacb'
// 'stock_in' => 'abcacb'
// 'stock_out' => 'abcacb'
// 'stock_available' => 'abcacb'
// 'sold_stock' => 'abcacb'
// 'damage_stock' => 'abcacb'
// 'other_stock_out' => 'abcacb'
// 'total_rate' => 0
// 'total_rated_person' => 0
// 'approved_by' => 1
// 'created_by' => 1
// 'updated_by' => 1
// 'created_at' => 'abcacb'
// 'updated_at' => 'abcacb'
// 'deleted_at' => 'abcacb'
// 'deleted_by' => 'abcacb'
