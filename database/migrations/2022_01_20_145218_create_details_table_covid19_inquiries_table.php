<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTableCovid19InquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_table_covid19_inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->comment('รหัสผู้ป่วย');
            $table->date('date_1')->comment('วันที่ 1');
            $table->string('location_1')->comment('สถานที่ 1');
            $table->string('person_1')->comment('จำนวนบุคคล 1');
            $table->date('date_2')->comment('วันที่ 2');
            $table->string('location_2')->comment('สถานที่ 2');
            $table->string('person_2')->comment('จำนวนบุคคล 2');
            $table->date('date_3')->comment('วันที่ 3');
            $table->string('location_3')->comment('สถานที่ 3');
            $table->string('person_3')->comment('จำนวนบุคคล 3');
            $table->date('date_4')->comment('วันที่ 4');
            $table->string('location_4')->comment('สถานที่ 4');
            $table->string('person_4')->comment('จำนวนบุคคล 4');
            $table->date('date_5')->comment('วันที่ 5');
            $table->string('location_5')->comment('สถานที่ 5');
            $table->string('person_5')->comment('จำนวนบุคคล 5');
            $table->date('date_6')->comment('วันที่ 6');
            $table->string('location_6')->comment('สถานที่ 6');
            $table->string('person_6')->comment('จำนวนบุคคล 6');
            $table->date('date_7')->comment('วันที่ 7');
            $table->string('location_7')->comment('สถานที่ 7');
            $table->string('person_7')->comment('จำนวนบุคคล 7');
            $table->date('date_8')->comment('วันที่ 8');
            $table->string('location_8')->comment('สถานที่ 8');
            $table->string('person_8')->comment('จำนวนบุคคล 8');
            $table->date('date_9')->comment('วันที่ 9');
            $table->string('location_9')->comment('สถานที่ 9');
            $table->string('person_9')->comment('จำนวนบุคคล 9');
            $table->date('date_10')->comment('วันที่ 10');
            $table->string('location_10')->comment('สถานที่ 10');
            $table->string('person_10')->comment('จำนวนบุคคล 10');
            $table->date('date_11')->comment('วันที่ 11');
            $table->string('location_11')->comment('สถานที่ 11');
            $table->string('person_11')->comment('จำนวนบุคคล 11');
            $table->date('date_12')->comment('วันที่ 12');
            $table->string('location_12')->comment('สถานที่ 12');
            $table->string('person_12')->comment('จำนวนบุคคล 12');
            $table->date('date_13')->comment('วันที่ 13');
            $table->string('location_13')->comment('สถานที่ 13');
            $table->string('person_13')->comment('จำนวนบุคคล 13');
            $table->date('date_14')->comment('วันที่ 14');
            $table->string('location_14')->comment('สถานที่ 14');
            $table->string('person_14')->comment('จำนวนบุคคล 14');
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
        Schema::dropIfExists('details_table_covid19_inquiries');
    }
}
