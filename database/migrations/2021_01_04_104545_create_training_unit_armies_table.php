<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingUnitArmiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_unit_armies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agency_army_id')->unsigned()->comment('สังกัด');
            $table->string('name')->nullable()->comment('ชื่อหน่วยฝึก');
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
        Schema::dropIfExists('training_unit_armies');
    }
}
