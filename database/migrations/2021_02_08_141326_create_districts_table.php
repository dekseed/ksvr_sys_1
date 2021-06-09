<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('district')->nullable()->comment('ตำบล');
            $table->string('amphoe')->nullable()->comment('อำเภอ');
            $table->string('province')->nullable()->comment('จังหวัด');
            $table->integer('zipcode')->unsigned()->nullable()->comment('รหัสไปรษณีย์');
            $table->integer('district_code')->unsigned()->nullable()->comment('รหัสตำบล');
            $table->integer('amphoe_code')->unsigned()->nullable()->comment('รหัสอำเภอ');
            $table->integer('province_code')->unsigned()->nullable()->comment('รหัสจังหวัด');
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
        Schema::dropIfExists('districts');
    }
}
