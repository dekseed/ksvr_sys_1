<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpCbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_cbcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('report_check_up_id')->unsigned();
            $table->integer('year')->nullable();
            $table->string('blood_wbc')->nullable();
            $table->string('blood_rbc')->nullable();
            $table->string('blood_hb')->nullable();
            $table->string('blood_hct')->nullable();
            $table->string('blood_mcv')->nullable();
            $table->string('blood_plt')->nullable();
            $table->string('blood_ne')->nullable();
            $table->string('blood_ly')->nullable();
            $table->string('blood_mo')->nullable();
            $table->string('blood_eo')->nullable();
            $table->string('blood_ba')->nullable();
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
        Schema::dropIfExists('report_check_up_cbcs');
    }
}
