<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyVaccineCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_vaccine_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->comment('วันที่รับวัคซีน ?');
            $table->boolean('inject')->default(0)->comment('เข็มที่ ?');
            $table->boolean('target_group')->default(0)->comment('กลุ่มเป้าหมายรับวัคซีน');
            $table->boolean('medical_personnel')->default(0)->comment('3.1 บุคลากรทางการแพทย์');
            $table->boolean('military_unit')->default(0)->comment('3.2 หน่วยทหาร');
            $table->boolean('military_unit1')->default(0)->comment('3.2.1 หน่วย มทบ.29');
            $table->boolean('military_unit2')->default(0)->comment('3.2.2 หน่วย ร.3');
            $table->boolean('military_unit3')->default(0)->comment('3.2.3 หน่วย ร.3 พัน1');
            $table->boolean('years_old')->default(0)->comment('3.3 กลุ่มอายุ 60 ปีขึ้นไป');
            $table->boolean('chronic_disease')->default(0)->comment('3.4 กลุ่มโรคเรื้อรัง');
            $table->boolean('general_public')->default(0)->comment('3.5 ประชาชนทั่วไป');
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
        Schema::dropIfExists('survey_vaccine_covids');
    }
}
