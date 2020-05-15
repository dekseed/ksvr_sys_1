<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->commnet('รหัสผู้ใช้');

            $table->integer('stock_id')->unsigned()->commnet('รหัสครุภัณฑ์');

            $table->string('genus')->nullable()->commnet('ประเภท');
            $table->string('detail')->nullable()->commnet('รายละเอียด');
            $table->text('note')->nullable()->commnet('หมายเหตุ');
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
        Schema::dropIfExists('repairs');
    }
}
