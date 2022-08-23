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
        Schema::table('attributes', function (Blueprint $table) {
            $table->foreign('application')->references('application_id')->on('application')->onDelete('cascade');
            $table->foreign('manufacturer')->references('manufacturer_id')->on('manufacturers')->onDelete('cascade');
            $table->foreign('fits_to')->references('category_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attributes', function (Blueprint $table) {
            $table->dropForeign(['application']);
            $table->dropForeign(['manufacturer']);
            $table->dropForeign(['fits_to']);
        });
    }
};
