<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComeBackAddUserCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('come_back_add_user_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('district_id')->nullable()->comment('รหัสตำบล');
            $table->string('travel')->nullable()->comment('เดินทางไป');
            $table->string('come_travel')->nullable()->comment('เดินทางกลับ');

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
        Schema::dropIfExists('come_back_add_user_covids');
    }
}
