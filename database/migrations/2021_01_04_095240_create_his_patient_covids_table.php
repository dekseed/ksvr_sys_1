<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHisPatientCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('his_patient_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profile_covid_id')->unsigned();
            $table->string('info')->comment('รายละเอียด');
            $table->string('fa')->nullable()->comment('พ่อ');
            $table->string('ma')->nullable()->comment('แม่');
            $table->string('bro')->nullable()->comment('พี่');
            $table->string('bro2')->nullable()->comment('น้อง');
            $table->string('relative')->nullable()->comment('ญาติ');
            $table->string('friend')->nullable()->comment('เพื่อน');

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
        Schema::dropIfExists('his_patient_covids');
    }
}
