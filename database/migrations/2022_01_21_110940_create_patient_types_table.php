<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient')->nullable()->comment('ผู้ป่วยใน/นอก');
            $table->date('date')->nullable()->comment('วันที่ admit');
            $table->string('diagnoes')->nullable()->comment('ผลวินิจฉัย');
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
        Schema::dropIfExists('patient_types');
    }
}
