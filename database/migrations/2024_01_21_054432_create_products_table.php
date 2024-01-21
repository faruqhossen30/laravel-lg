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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('author_id');

            // price
            $table->integer('discount')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->string('puk_code')->nullable();
            $table->string('thumbnail');
            $table->enum('status',['active','draft'])->default('draft');
            $table->boolean('is_stock')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
