<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinceSurveillanceAreaCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('province_surveillance_area_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('province_surveillance_area_covid_id')->unsigned()->comment('รหัสพื้นที่เสี่ยง');
            $table->integer('province_code')->unsigned()->comment('รหัสจังหวัด');
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
        Schema::dropIfExists('province_surveillance_area_covids');
    }
}
