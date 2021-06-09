<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUp12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_1_2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_check_up_id')->unsigned()->comment('รหัสกำลังพล');
            $table->string('year')->nullable()->comment('ปีงบ');
            $table->integer('total_time')->comment('ครั้งที่');

            $table->string('q8_1')->nullable()->comment('ข้อ 1');
            $table->string('q8_2')->nullable()->comment('ข้อ 2');
            $table->string('q8_3')->nullable()->comment('ข้อ 3');
            $table->string('q8_3_3')->nullable()->comment('ข้อ 3.1');
            $table->string('q8_4')->nullable()->comment('ข้อ 4');
            $table->string('q8_5')->nullable()->comment('ข้อ 5');
            $table->string('q8_6')->nullable()->comment('ข้อ 6');
            $table->string('q8_7')->nullable()->comment('ข้อ 7');
            $table->string('q8_8')->nullable()->comment('ข้อ 8');

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
        Schema::dropIfExists('report_check_up_1_2s');
    }
}
