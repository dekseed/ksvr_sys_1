<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovid19InquiryFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid19_inquiry_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('code')->nullable()->comment('รหัสผู้ป่วย');
            $table->integer('user_id')->unsigned()->comment('รหัสข้อมูลทั่วไป');
            $table->integer('clinic_id')->unsigned()->comment('รหัสข้อมูลคลินิก');
            // $table->integer('vaccine_id')->unsigned()->comment('รหัสข้อมูลวัคซีน');
            $table->integer('riskhistory_id')->unsigned()->comment('รหัสประวัติความเสี่ยง');
            $table->integer('details_id')->unsigned()->comment('รหัสรายละเอียดเหตุการณ์');
            // $table->integer('search_id')->unsigned()->comment('รหัสค้นหาผู้สัมผัส');
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
        Schema::dropIfExists('covid19_inquiry_forms');
    }
}
