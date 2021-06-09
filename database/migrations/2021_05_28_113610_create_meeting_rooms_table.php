<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('user_id')->unsigned()->comment('รหัสผู้ใช้/ผู้แจ้ง');
            $table->integer('cate_meeting_rooms_id')->unsigned()->comment('ประเภท');
            $table->integer('meeting_room_names_id')->unsigned()->comment('รหัสห้องประชุม');
            $table->integer('sys_conferences_id')->unsigned()->nullable()->comment('รหัสระบบ conference');
            $table->string('name')->comment('ชื่อการประชุม');
            $table->integer('department')->unsigned()->nullable()->comment('แผนกที่ขอใช้');
            $table->date('date')->comment('วันที่ประชุม');
            $table->time('time_first')->comment('ตั้งแต่เวลา');
            $table->time('time_end')->comment('ถึงเวลา');
            $table->integer('total')->comment('จำนวนผู้เข้าร่วมประชุม');
            $table->text('detail')->nullable()->comment('หมายเหตุ');
            $table->string('filename')->nullable()->comment('ชื่อไฟล์เอกสารตัวเรื่อง');
            $table->string('file')->nullable();
            $table->string('filename_download')->nullable()->comment('ชื่อไฟล์เอกสารดาวห์โหลด');
            $table->string('file_download')->nullable();

            $table->timestamps();
        });
    }

    // บันทึกสรุปรายงานการประชุม
    // บัญชีลงนามเข้าร่วมประชุม

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_rooms');
    }
}
