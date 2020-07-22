<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckUpUserPolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_up_user_pols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titlename');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cid');
            $table->string('gender');
            $table->string('age');
            $table->string('tel');
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
        Schema::dropIfExists('check_up_user_pols');
    }
}
