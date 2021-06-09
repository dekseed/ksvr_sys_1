<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressUserCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_user_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home_id')->nullable()->comment('บ้านเลขที่');
            $table->string('alley')->nullable()->comment('ซอย');
            $table->string('street')->nullable()->comment('ถนน');
            $table->string('canton')->nullable()->comment('ตำบล');
            $table->string('district')->nullable()->comment('อำเภอ');
            $table->string('province')->nullable()->comment('จังหวัด');
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
        Schema::dropIfExists('address_user_covids');
    }
}
