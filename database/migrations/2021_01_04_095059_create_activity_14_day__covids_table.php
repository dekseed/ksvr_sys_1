<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivity14DayCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_14_day__covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profile_covid_id')->unsigned();
            $table->string('info1')->nullable()->comment('วันที่ 1');
            $table->string('info2')->nullable()->comment('วันที่ 2');
            $table->string('info3')->nullable()->comment('วันที่ 3');
            $table->string('info4')->nullable()->comment('วันที่ 4');
            $table->string('info5')->nullable()->comment('วันที่ 5');
            $table->string('info6')->nullable()->comment('วันที่ 6');
            $table->string('info7')->nullable()->comment('วันที่ 7');
            $table->string('info8')->nullable()->comment('วันที่ 8');
            $table->string('info9')->nullable()->comment('วันที่ 9');
            $table->string('info10')->nullable()->comment('วันที่ 10');
            $table->string('info11')->nullable()->comment('วันที่ 11');
            $table->string('info12')->nullable()->comment('วันที่ 12');
            $table->string('info13')->nullable()->comment('วันที่ 13');
            $table->string('info14')->nullable()->comment('วันที่ 14');

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
        Schema::dropIfExists('activity_14_day__covids');
    }
}
