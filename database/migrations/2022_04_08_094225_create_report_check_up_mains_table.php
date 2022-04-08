<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_mains', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('report_check_up_id')->unsigned();
            $table->foreignId('report_check_up_id')->references('id')->on('report_check_ups')->onDelete('cascade')->unsigned();
            $table->integer('year')->nullable();
            $table->foreignId('report_check_up_cbc_id')->references('id')->on('report_check_up_cbcs')->onDelete('cascade')->unsigned();
            $table->foreignId('report_check_up_urine_id')->references('id')->on('report_check_up_urines')->onDelete('cascade')->unsigned();
            $table->foreignId('report_check_up_detail_1_id')->references('id')->on('report_check_up_detail_1s')->onDelete('cascade')->unsigned();
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
        Schema::dropIfExists('report_check_up_mains');
    }
}
