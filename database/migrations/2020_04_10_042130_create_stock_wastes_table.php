<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockWastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_wastes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->commnet('รหัสผู้ใช้');
            $table->integer('category_wastes_id')->unsigned()->commnet('รหัสหมวดหมู่');
            //$table->integer('stock_waste_quantity_id')->unsigned()->commnet('รหัสจำนวนวัสดุสิ้นเปลือง');

            $table->string('name')->nullable()->commnet('ชื่อรายการ');
            $table->string('brand')->nullable()->commnet('ยี่ห้อ');
            $table->string('model')->nullable()->commnet('รุ่น');

            $table->text('detail')->nullable()->commnet('หมายเหตุ');

            $table->string('picname')->default('default.jpg')->nullable();
            $table->string('pic')->default('default.jpg')->nullable();
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
        Schema::dropIfExists('stock_wastes');
    }
}
