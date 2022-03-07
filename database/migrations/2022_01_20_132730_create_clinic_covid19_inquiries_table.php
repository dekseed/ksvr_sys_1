<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicCovid19InquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_covid19_inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datesick')->nullable()->comment('วันที่เริ่มป่วย');
            $table->date('first')->nullable()->comment('เข้ารักษาครั้งแรก');
            $table->string('namehosbe')->nullable()->comment('ชื่อ รพ. ที่รักษา');
            $table->string('namehosup')->nullable()->comment('ชื่อ รพ. ปัจจุบัน');
            $table->integer('district_id')->nullable()->unsigned()->comment('อำเภอ,จังหวัด');
            $table->integer('patientdate_id')->nullable()->unsigned()->comment('วันที่พบผู้ป่วย');
            $table->integer('x_ray_id')->nullable()->unsigned()->comment('เอกซเรย์');
            $table->integer('cbc_id')->nullable()->unsigned()->comment('ผลตรวจ cbc');
            $table->integer('test_id')->nullable()->unsigned()->comment('ผลตรวจ test');
            $table->integer('pcr_id')->nullable()->unsigned()->comment('ผลตรวจ pcr');
            $table->integer('antibody_id')->nullable()->unsigned()->comment('ผลตรวจ antibody');
            $table->integer('type_id')->nullable()->unsigned()->comment('ประเภทผู้ป่วย');
            $table->integer('medicine_id')->nullable()->unsigned()->comment('ยารักาษา');
            $table->integer('status_id')->nullable()->unsigned()->comment('สถานะ');
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
        Schema::dropIfExists('clinic_covid19_inquiries');
    }
}
