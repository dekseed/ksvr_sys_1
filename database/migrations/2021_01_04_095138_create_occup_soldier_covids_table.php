<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupSoldierCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occup_soldier_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profile_covid_id')->unsigned();
            $table->string('info')->nullable()->comment('ชื่ออาชีพ');
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
        Schema::dropIfExists('occup_soldier_covids');
    }
}
