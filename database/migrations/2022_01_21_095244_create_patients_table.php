<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fever')->nullable()->comment('ไข้');
            $table->string('fever_degree')->nullable()->comment('อุณหภูมิแรกรับ');
            $table->string('fever_oxygen')->nullable()->comment('set');
            $table->integer('ventilator')->nullable()->comment('เครื่องช่วยหายใจ');
            $table->integer('cough')->nullable()->comment('ไอ');
            $table->integer('neck')->nullable()->comment('เจ็บคอ');
            $table->integer('mascle')->nullable()->comment('ปวดกล้ามเนื้อ');
            $table->integer('runny')->nullable()->comment('มีน้ำมูก');
            $table->integer('phlegm')->nullable()->comment('มีเสมหะ');
            $table->integer('breathe')->nullable()->comment('หายใจลำบาก');
            $table->integer('headache')->nullable()->comment('ปวดศีระษะ');
            $table->integer('liquid')->nullable()->comment('ถ่ายเหลว');
            $table->integer('nose')->nullable()->comment('จมูกไม่ได้กลิ่น');
            $table->integer('tongue')->nullable()->comment('ลิ้นไม่รับรส');
            $table->integer('eye')->nullable()->comment('ตาแดง');
            $table->integer('rash')->nullable()->comment('ผื่น');
            $table->string('rash_details')->nullable()->comment('ตำแหน่ง');
            $table->integer('other')->nullable()->comment('อื่นๆ');
            $table->string('other_details')->nullable()->comment('ระบุ');
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
        Schema::dropIfExists('patients');
    }
}
