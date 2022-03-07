<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchCovid19InquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_covid19_inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable()->unsigned()->comment('รหัสผู้ป่วย');
            $table->string('name')->nullable()->comment('ชื่อ-นามสกุล');
            $table->string('sex')->nullable()->comment('เพศ');
            $table->string('age')->nullable()->comment('อายุ');
            $table->string('add')->nullable()->comment('ที่อยู่');
            $table->string('tel')->nullable()->comment('เบอร์โทร');
            $table->string('datetush')->nullable()->comment('วันที่สัมผัส');
            $table->string('detailstuch')->nullable()->comment('ลัหษณะการสัมผัส');
            $table->string('sick')->nullable()->comment('คนป่วย/ไม่ป่วย');
            $table->string('sickdate')->nullable()->comment('วันที่ป่วย');
            $table->string('equipment')->nullable()->comment('การใส่อุปกรณ์ป้องกัน');
            $table->string('datevaccine')->nullable()->comment('วันที่ได้รับวัคซีน');
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
        Schema::dropIfExists('search_covid19_inquiries');
    }
}
