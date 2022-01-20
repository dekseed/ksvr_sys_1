<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockWastesOutcomeModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_wastes_outcome_model_cartridge_inks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('model_cartridge_inks_id')->unsigned()->comment('รุ่นตลับหมึก');
            $table->integer('stock_id')->comment('รหัสเครื่อง');
            $table->integer('user_id')->comment('ผู้แจ้ง');
            $table->integer('admin_id')->comment('เจ้าหน้าที่');
            $table->string('amount')->comment('จำนวน');
            $table->text('detail')->nullable()->comment('หมายเหตุ');
            $table->integer('status_id')->comment('สถานะ');
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
        Schema::dropIfExists('stock_wastes_outcome_model_cartridge_inks');
    }
}
