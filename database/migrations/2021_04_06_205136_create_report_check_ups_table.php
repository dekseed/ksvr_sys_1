<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_ups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('title_name')->unsigned()->comment('ชื่อนำหน้า');
            $table->string('first_name')->nullable()->comment('ชื่อ');
            $table->string('last_name')->nullable()->comment('นามสกุล');

            $table->string('cid')->nullable()->comment('เลขบัตรปปช.');
            $table->integer('hn')->unsigned()->comment('เลขที่ HN');
            $table->string('gender')->nullable()->comment('เพศ');
            $table->date('birthdate')->nullable()->comment('วันเกิด');
            $table->string('age')->nullable()->comment('อายุ');
            $table->string('unit')->nullable()->comment('หน่วยที่สังกัด');
            $table->string('department')->nullable()->comment('ฝ่าย/แผนก/กอง');
            $table->string('position')->nullable()->comment('ตำแหน่ง');
            $table->string('srg')->nullable()->comment('ชรก.');
            $table->string('class')->nullable()->comment('ประเภท');
            $table->string('job_description')->nullable()->comment('ลักษณะงาน');
            $table->string('phonenumber')->nullable()->comment('เบอร์โทร');

            $table->string('status_staff')->comment('สถานะเจ้าหน้าที่');
            $table->string('status_doctor')->comment('สถานะแพทย์');
            $table->string('status_dentists')->comment('สถานะทันตกรรม');

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
        Schema::dropIfExists('report_check_ups');
    }
}
