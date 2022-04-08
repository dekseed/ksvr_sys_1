<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpUrinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_urines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('report_check_up_id')->unsigned();
            $table->integer('year')->nullable();
            $table->string('urine_blood')->nullable();
            $table->string('urine_ketone')->nullable();
            $table->string('urine_sugar')->nullable();
            $table->string('urine_protein')->nullable();
            $table->string('urine_rbc')->nullable();
            $table->string('urine_wbc')->nullable();
            $table->string('urine_epi')->nullable();
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
        Schema::dropIfExists('report_check_up_urines');
    }
}
