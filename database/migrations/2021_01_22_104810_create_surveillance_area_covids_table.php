<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveillanceAreaCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveillance_area_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rating')->nullable()->comment('ระดับ');
            $table->string('name_rating')->nullable()->comment('ชื่อระดับ');
            $table->string('color')->nullable()->comment('สีระดับ');
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
        Schema::dropIfExists('surveillance_area_covids');
    }
}
