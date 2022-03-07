<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number')->nullable()->comment('ครั้งที่');
            $table->date('date')->nullable()->comment('วันที่ เก็บ');
            $table->string('example')->nullable()->comment('ชนิดตัวอย่าง');
            $table->string('location')->nullable()->comment('สถานที่ส่งตรวจ');
            $table->integer('detected')->nullable()->comment('ผลตรวจ Detected');
            $table->integer('n_detected')->nullable()->comment('ผลตรวจ Not Detected');
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
        Schema::dropIfExists('pcrs');
    }
}
