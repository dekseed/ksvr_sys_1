<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('add_covid_id')->unsigned()->comment('ที่อยู่ปัจจุบัน');
            $table->integer('com_back_add_covid_id')->unsigned()->comment('เดินทางกลับมาจาก');
            $table->integer('training_unit_army_id')->unsigned()->comment('หน่วยฝึก');
            $table->string('title_name')->comment('คำนำหน้า');
            $table->string('first_name')->comment('ชื่อหน้า');
            $table->string('last_name')->comment('นามสกุล');
            $table->string('tel')->nullable()->comment('เบอร์โทร');
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
        Schema::dropIfExists('profile_covids');
    }
}
