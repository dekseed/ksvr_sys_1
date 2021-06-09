<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUp1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_check_up_id')->unsigned()->comment('รหัสกำลังพล');
            $table->string('year')->nullable()->comment('ปีงบ');
            $table->integer('total_time')->comment('ครั้งที่');

            $table->string('a1')->nullable()->comment('ข้อ 1');
            $table->string('a1_d')->nullable()->comment('อื่นๆ');

            $table->string('b2')->nullable()->comment('ข้อ 2');
            $table->string('b2_d')->nullable()->comment('อื่นๆ');

            $table->string('c3_1')->nullable()->comment('ข้อ 3.1');
            $table->string('c3_2')->nullable()->comment( 'ข้อ 3.2');
            $table->string('c3_3')->nullable()->comment( 'ข้อ 3.3');
            $table->string('c3_4')->nullable()->comment( 'ข้อ 3.4');
            $table->string('c3_5')->nullable()->comment( 'ข้อ 3.5');
            $table->string('c3_6')->nullable()->comment( 'ข้อ 3.6');

            $table->string('d4')->nullable()->comment('ข้อ 4');
            $table->string('d4_d')->nullable()->comment('อื่นๆ');

            $table->string('e5_1')->nullable()->comment('ข้อ 5.1');
            $table->string('e5_2')->nullable()->comment('ข้อ 5.2');
            $table->string('e5_3')->nullable()->comment('ข้อ 5.3');
            $table->string('e5_4')->nullable()->comment('ข้อ 5.4');
            $table->string('e5_5')->nullable()->comment('ข้อ 5.5');

            $table->string('f6')->nullable()->comment('ข้อ 6');

            $table->string('g7')->nullable()->comment('ข้อ 7');
            $table->string('g7_d1')->nullable()->comment('เคยสูบ แต่เลิกแล้ว กี่ปี');
            $table->string('g7_d2')->nullable()->comment('เคยสูบ');
            $table->string('g7_d3')->nullable()->comment('เริ่มสูบอายุ');
            $table->string('g7_d4')->nullable()->comment('เลิกสูบอายุ');
            $table->string('g7_d5')->nullable()->comment('สูบวันละ');

            $table->string('g7_d6')->nullable()->comment('ยังสูบอยู่ วันละ');

            $table->string('h8')->nullable()->comment('ข้อ 8');

            $table->string('i9_1')->nullable()->comment('ข้อ 9.1');
            $table->string('i9_2')->nullable()->comment('ข้อ 9.2');
            $table->string('i9_3')->nullable()->comment('ข้อ 9.3');
            $table->string('i9_4')->nullable()->comment('ข้อ 9.4');
            $table->string('i9_5')->nullable()->comment('ข้อ 9.5');

            $table->string('j10')->nullable()->comment('ข้อ 10');

            $table->string('k11')->nullable()->comment('ข้อ 11');

            $table->string('l12')->nullable()->comment('ข้อ 12');
            $table->string('l12_d')->nullable()->comment('ข้อ 12 อื่นๆ');


            $table->string('m13_1')->nullable()->comment('ข้อ 13.1');
            $table->string('m13_2')->nullable()->comment('ข้อ 13.2');
            $table->string('m13_3')->nullable()->comment('ข้อ 13.3');

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
        Schema::dropIfExists('report_check_up_1s');
    }
}
