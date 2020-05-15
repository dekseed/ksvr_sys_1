<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockWasteQuantitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_waste_quantities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->commnet('รหัสผู้ใช้');
            $table->integer('stock_waste_id')->unsigned()->commnet('รหัสวัสดุสิ้นเปลือง');

            $table->string('round')->nullable()->commnet('รอบเดือน');
            $table->string('number')->nullable()->commnet('จำนวน');

            $table->string('unit')->nullable()->commnet('หน่วยนับ');
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
        Schema::dropIfExists('stock_waste_quantities');
    }
}
