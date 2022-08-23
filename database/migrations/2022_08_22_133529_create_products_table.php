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
            $table->engine = 'InnoDB';
            $table->id('product_id');
            $table->string('name');
            $table->string('product_code');
            $table->float('price');
            $table->text('description')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('image_src');
            $table->integer('category_id');
            $table->integer('attribute_id')->nullable();
            // $table->foreign('brand_id')->references('brand_id')->on('brands')->onDelete('cascade');
            // $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            // $table->foreign('attribute_id')->references('attribute_id')->on('attributes')->onDelete('cascade');
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
