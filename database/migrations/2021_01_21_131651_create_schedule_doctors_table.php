<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->commnet('รหัสผู้ใช้');

            $table->integer('doctor_position_id')->unsigned()->nullable()->comment('คลินิกที่ให้บริการ');
            $table->string('data-start')->nullable()->comment('เวลาเริ่มต้น');
            $table->string('data-end')->nullable()->comment('เวลาสิ้นสุด');

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
        Schema::dropIfExists('schedule_doctors');
    }
}
