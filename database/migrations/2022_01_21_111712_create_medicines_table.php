<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('give')->nullable()->comment('ให้');
            $table->date('first_dose')->nullable()->comment('วันที่ได้รับยาโดสแรก');
            $table->integer('remdesivir')->nullable()->comment('remdesivir');
            $table->integer('favipiravir')->nullable()->comment('favipiravir');
            $table->integer('lopinavir')->nullable()->comment('lopinavir/ritonavir');
            $table->integer('darunavir')->nullable()->comment('darunavir');
            $table->integer('ritonavir')->nullable()->comment('ritonavir');
            $table->integer('ch')->nullable()->comment('Chloroquine/Hydroxychloroquine');
            $table->integer('other')->nullable()->comment('อื่นๆ');
            $table->string('other_details')->nullable()->comment('รายละเอียด อื่นๆ');
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
        Schema::dropIfExists('medicines');
    }
}
