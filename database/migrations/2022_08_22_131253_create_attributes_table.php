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
        Schema::create('attributes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('attribute_id');
            $table->set('optics_type', ['Refractor', 'Reflector', 'Catadioptric'])->nullable();
            $table->integer('max_useful_magnification')->nullable();
            $table->integer('focal_length')->nullable();
            $table->unsignedBigInteger('application')->nullable();
            $table->integer('aperture')->nullable();
            $table->set('mounting_type', ['Azimuthal', 'Equatorial'])->nullable();
            $table->unsignedBigInteger('manufacturer')->unsigned()->nullable();
            $table->integer('max_additional_load_capacity')->nullable();
            $table->string('material')->nullable();
            $table->float('total_weight')->nullable();
            $table->integer('max_height')->nullable();
            $table->integer('apparent_field_of_view')->nullable();
            $table->float('connection')->nullable();
            $table->integer('magnification')->nullable();
            $table->unsignedBigInteger('fits_to')->nullable();
            $table->string('shape')->nullable();
            $table->boolean('waterproofness')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('colour')->nullable();
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
        Schema::dropIfExists('attributes');
    }
};
