<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockWastesModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_wastes__model_cartridge_inks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('department_id')->comment('ชื่อแผนก');
            $table->integer('model_cartridge_inks_id')->unsigned()->comment('รุ่นตลับหมึก');
            $table->integer('user_id')->comment('ผู้แจ้ง');
            $table->integer('admin_id')->comment('เจ้าหน้าที่');
            $table->integer('round')->comment('รอบเดือน');
            $table->text('detail')->comment('หมายเหตุ');
            $table->string('in_items')->comment('เข้า');
            $table->string('out_items')->comment('ออก');
            $table->string('balance')->comment('คงเหลือ');
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
        Schema::dropIfExists('stock_wastes__model_cartridge_inks');
    }
}
