<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpDetail1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_detail_1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_check_up_id')->nullable()->unsigned();

            $table->integer('weight')->nullable()->comment('น้ำหนัก');
            $table->integer('height')->nullable()->comment('ส่วนสูง');
            $table->string('waist')->nullable()->comment('รอบเอว');
            $table->string('bmi')->nullable()->comment('BMI');

            $table->string('pressure_1')->nullable()->comment('ความดันโลหิต ครั้งที่ 1');
            $table->string('pulse_1')->nullable()->comment('ชีพจร ครั้งที่ 1');
            $table->string('pressure_2')->nullable()->comment('ความดันโลหิต ครั้งที่ 2');
            $table->string('pulse_2')->nullable()->comment('ชีพจร ครั้งที่ 2');

            $table->string('x_ray')->nullable()->comment('x-ray');

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
        Schema::dropIfExists('report_check_up_detail_1s');
    }
}
