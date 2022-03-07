<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCovid19InquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_covid19_inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number_id')->comment('เลขบัตรประชาชน');
            $table->integer('title_name_id')->unsigned()->comment('คำนำหน้า');
            $table->string('first_name')->comment('ชื่อ');
            $table->string('last_name')->comment('นามสกุล');
            $table->integer('sex')->comment('เพศ');
            $table->integer('age')->comment('อายุ');
            $table->string('nation')->comment('สัญชาติ');
            $table->string('occ')->comment('อาชีพ');
            $table->string('location')->comment('สถานที่');
            $table->integer('tel')->comment('เบอร์โทรที่ติดต่อได้');
            $table->integer('telapp')->comment('เบอร์ลงแอปหมอชนะ');
            $table->integer('home_type_id')->comment('ประเภทบ้านพัก');
            $table->string('home_id')->nullable()->comment('บ้านเลขที่');
            $table->string('alley')->nullable()->comment('ซอย');
            $table->string('street')->nullable()->comment('ถนน');
            $table->integer('district_id')->unsigned()->comment('อำเภอ');
            $table->string('disease')->nullable()->comment('โรคประจำตัว');
            $table->integer('smoking')->nullable()->comment('สูบบุหรี่');

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
        Schema::dropIfExists('user_covid19_inquiries');
    }
}
