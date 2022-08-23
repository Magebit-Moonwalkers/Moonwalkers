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
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('image_src');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('attribute_id')->nullable();
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
