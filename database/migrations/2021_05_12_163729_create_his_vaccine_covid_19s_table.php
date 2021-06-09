<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHisVaccineCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('his_vaccine_covid_19s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profile_covid_id')->unsigned();
            $table->string('info')->comment('รายละเอียด');
            $table->string('time')->nullable()->comment('ช่วงเวลา');
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
        Schema::dropIfExists('his_vaccine_covid_19s');
    }
}
