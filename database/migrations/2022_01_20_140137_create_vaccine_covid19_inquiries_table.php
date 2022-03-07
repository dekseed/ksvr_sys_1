<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineCovid19InquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_covid19_inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable()->unsigned()->comment('ได้รับวัคซีน');
            $table->integer('number')->nullable()->comment('จำนวนครั้ง');
            $table->date('date')->nullable()->comment('วันที่ได้รับ');
            $table->integer('name_vaccine_id')->nullable()->unsigned()->comment('ชื่อวัคซีน');
            $table->string('location')->nullable()->comment('สถานที่');
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
        Schema::dropIfExists('vaccine_covid19_inquiries');
    }
}
