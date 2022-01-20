<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCartridgeInkStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_cartridge_ink_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->comment('รหัสผู้ใช้');
            $table->integer('user_id_update')->unsigned()->comment('userอัพเดตข้อมูล');
            $table->integer('stock_wastes_outcome_model_cartridge_ink_id')->unsigned()->comment('รหัสแจ้งเปลี่ยนตลับหมึก');
            $table->text('detail')->nullable()->comment('รายละเอียด');
            $table->text('note')->nullable()->comment('หมายเหตุ');
            $table->string('signed')->nullable()->comment('ลายเซ็นต์');

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
        Schema::dropIfExists('model_cartridge_ink_statuses');
    }
}
