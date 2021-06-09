<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUp11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_1_1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_check_up_id')->unsigned()->comment('รหัสกำลังพล');
            $table->string('year')->nullable()->comment('ปีงบ');
            $table->integer('total_time')->comment('ครั้งที่');

            $table->string('q9_1')->nullable()->comment('ข้อ 1');
            $table->string('q9_2')->nullable()->comment('ข้อ 2');
            $table->string('q9_3')->nullable()->comment('ข้อ 3');
            $table->string('q9_4')->nullable()->comment('ข้อ 4');
            $table->string('q9_5')->nullable()->comment('ข้อ 5');
            $table->string('q9_6')->nullable()->comment('ข้อ 6');
            $table->string('q9_7')->nullable()->comment('ข้อ 7');
            $table->string('q9_8')->nullable()->comment('ข้อ 8');
            $table->string('q9_9')->nullable()->comment('ข้อ 9');

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
        Schema::dropIfExists('report_check_up_1_1s');
    }
}
