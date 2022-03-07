<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_check_covid_id')->comment('วิธีการตรวจ');
            $table->integer('nagative')->nullable()->comment('ผลเป็น ลบ');
            $table->integer('positive')->nullable()->comment('ผลเป็น บวก');
            $table->integer('flua')->nullable()->comment('ไข้หวัด A');
            $table->integer('flub')->nullable()->comment('ไข้หวัด B');
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
        Schema::dropIfExists('tests');
    }
}
