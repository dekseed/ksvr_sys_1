<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskhistoryCovid19InquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riskhistory_covid19_inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable()->unsigned()->comment('ไอดีผู้ใช้');
            $table->string('num1')->nullable()->comment('ข้อที่ 1');
            $table->string('city')->nullable()->comment('เมือง');
            $table->string('country')->nullable()->comment('ประเทศ');
            $table->string('date')->nullable()->comment('วันที่เดินทางเข้าประเทศ');
            $table->string('airline')->nullable()->comment('สายการบิน');
            $table->string('flight')->nullable()->comment('เที่นวบิน');
            $table->string('seat')->nullable()->comment('ที่นั่ง');
            $table->integer('num2')->nullable()->comment('ข้อที่ 2');
            $table->integer('num3')->nullable()->comment('ข้อที่ 3');
            $table->integer('num4')->nullable()->comment('ข้อที่ 4');
            $table->string('num4details')->nullable()->comment('ระบุ');
            $table->integer('num5')->nullable()->comment('ข้อที่ 5');
            $table->integer('num6')->nullable()->comment('ข้อที่ 6');
            $table->string('num6details')->nullable()->comment('ระบุ');
            $table->integer('num7')->nullable()->comment('ข้อที่ 7');
            $table->integer('num8')->nullable()->comment('ข้อที่ 8');
            $table->integer('num9')->nullable()->comment('ข้อที่ 9');
            $table->string('num10')->nullable()->comment('ข้อที่ 10 อื่นๆ');
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
        Schema::dropIfExists('riskhistory_covid19_inquiries');
    }
}
