<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelineCovidDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_covid_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->comment('รหัสผู้ใช้');
            // $table->time('time_start')->nullable()->comment('เวลา');

            $table->text('description')->nullable()->comment('รายละเอียด');
            $table->string('address')->nullable()->comment('ที่อยู่');
            $table->float('lat', 10, 6)->nullable()->comment('ตำแหน่ง lat');
            $table->float('long', 10, 6)->nullable()->comment('ตำแหน่ง long');
            $table->boolean('D')->default(0)->comment('อยู่ห่าง?');
            $table->boolean('M')->default(0)->comment('ใส่แมส?');
            $table->boolean('H')->default(0)->comment('ล้างมือ?');
            $table->boolean('T')->default(0)->comment('วัดอุณหภูมิ?');
            $table->boolean('T2')->default(0)->comment('Testing ตรวจหาเชื้อโควิด-19?');
            $table->boolean('A')->default(0)->comment('Application Thaichana ติดตั้งและใช้แอปไทยชนะ/หมอชนะ	');
            $table->date('date');
            $table->time('time');
            $table->boolean('T2_Type')->default(0)->comment('ตรวจหาเชื่อแบบไหน');
            $table->boolean('T2_Type_Result')->default(0)->comment('ผลตรวจ');
            $table->boolean('T2_Type_')->default(0)->comment('เลือกวิธีตรวจ');
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
        Schema::dropIfExists('timeline_covid_details');
    }
}
