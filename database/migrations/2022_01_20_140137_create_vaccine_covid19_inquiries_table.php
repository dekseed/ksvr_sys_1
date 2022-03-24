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
            $table->integer('vac_id')->nullable()->comment('ได้รับวัคซีน');
            $table->integer('num_vac')->nullable()->comment('จำนวนครั้ง');

            $table->integer('number_1')->nullable()->comment('ครั้งที่ 1');
            $table->date('date_1')->nullable()->comment('วันที่ได้รับ');
            $table->integer('name_vaccine_id_1')->nullable()->unsigned()->comment('ชื่อวัคซีน');
            $table->string('location_1')->nullable()->comment('สถานที่');

            $table->integer('number_2')->nullable()->comment('ครั้งที่ 2');
            $table->date('date_2')->nullable()->comment('วันที่ได้รับ');
            $table->integer('name_vaccine_id_2')->nullable()->unsigned()->comment('ชื่อวัคซีน');
            $table->string('location_2')->nullable()->comment('สถานที่');

            $table->integer('number_3')->nullable()->comment('ครั้งที่ 3');
            $table->date('date_3')->nullable()->comment('วันที่ได้รับ');
            $table->integer('name_vaccine_id_3')->nullable()->unsigned()->comment('ชื่อวัคซีน');
            $table->string('location_3')->nullable()->comment('สถานที่');

            $table->integer('number_4')->nullable()->comment('ครั้งที่ 4');
            $table->date('date_4')->nullable()->comment('วันที่ได้รับ');
            $table->integer('name_vaccine_id_4')->nullable()->unsigned()->comment('ชื่อวัคซีน');
            $table->string('location_4')->nullable()->comment('สถานที่');

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
