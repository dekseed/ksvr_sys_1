<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpStoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_stools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_check_up_id')->unsigned();
            $table->integer('year')->nullable();
            $table->string('stool_RBC')->nullable();
            $table->string('stool_WBC')->nullable();
            $table->string('stool_D')->nullable();
            $table->string('stool_blood')->nullable();
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
        Schema::dropIfExists('report_check_up_stools');
    }
}
