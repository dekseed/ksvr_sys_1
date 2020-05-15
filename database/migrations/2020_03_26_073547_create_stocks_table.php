<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->commnet('รหัสผู้ใช้');
            $table->integer('category_equipments_id')->unsigned()->commnet('รหัสหมวดหมู่');


            $table->string('number')->nullable()->commnet('หมายเลขเครื่อง/เลขทะเบียน');
            $table->string('name')->nullable()->commnet('ชื่ออุปกรณ์');
            $table->string('brand')->nullable()->commnet('ยี่ห้อ');
            $table->string('model')->nullable()->commnet('รุ่น');
            $table->string('sn')->nullable()->commnet('s/n');
            $table->string('expenditure')->nullable()->commnet('ประเภทปีงบประมาณ');
            $table->text('detail')->nullable()->commnet('หมายเหตุ');

            $table->string('picname')->default('default.jpg')->nullable();
            $table->string('pic')->default('default.jpg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
