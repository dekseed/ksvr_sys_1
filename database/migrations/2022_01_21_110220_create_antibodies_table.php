<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntibodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antibodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number')->nullable()->comment('ครั้งที่');
            $table->date('date')->nullable()->comment('วันที่ เก็บ');
            $table->string('example')->nullable()->comment('ชนิดตัวอย่าง');
            $table->string('location')->nullable()->comment('สถานที่ส่งตรวจ');
            $table->string('result')->nullable()->comment('ผลตรวจ ');
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
        Schema::dropIfExists('antibodies');
    }
}
