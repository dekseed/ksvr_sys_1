<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthCheckResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_check_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_check_up_id')->unsigned();
            $table->integer('year')->nullable();
            $table->string('result_1')->nullable()->comment('ผลการตรวจปกติ');
            $table->string('result_2')->nullable()->comment('น้ำตาลในเลือดสูง');
            $table->string('result_3')->nullable()->comment('กรดยูริคสูง');
            $table->string('result_4')->nullable()->comment('ตับผิดปกติ');
            $table->string('result_5')->nullable()->comment('ไขมันในเลือดสูง');
            $table->string('result_6')->nullable()->comment('ไตผิดปกติ');
            $table->string('result_7')->nullable()->comment('ปัสสาวะผิดปกติ');
            $table->string('result_8')->nullable()->comment('โลหิตจาง');
            $table->string('result_9')->nullable()->comment('อุจจาระผิดปกติ');
            $table->string('result_10')->nullable()->comment('ความดันโลหิตสูง');
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
        Schema::dropIfExists('health_check_results');
    }
}
