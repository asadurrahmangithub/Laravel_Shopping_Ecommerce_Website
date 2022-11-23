<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->string('product_name');
            $table->integer('product_code');
            $table->integer('product_price');
            $table->integer('discount_amount');
            $table->integer('discount_price');
            $table->text('product_description');
            $table->string('product_made');
            $table->integer('stock_amount');
            $table->integer('product_cost');
            $table->integer('product_area');
            $table->text('image');
            $table->text('image1');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
