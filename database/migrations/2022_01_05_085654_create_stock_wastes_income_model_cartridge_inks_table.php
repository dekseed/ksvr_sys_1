<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockWastesIncomeModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_wastes_income_model_cartridge_inks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('model_cartridge_inks_id')->unsigned()->comment('รุ่นตลับหมึก');
            $table->integer('admin_id')->comment('เจ้าหน้าที่');
            $table->integer('round')->comment('รอบเดือน');
            $table->string('amount')->comment('จำนวน');
            $table->text('detail')->nullable()->comment('หมายเหตุ');
            $table->integer('status')->comment('สถานะ');
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
        Schema::dropIfExists('stock_wastes_income_model_cartridge_inks');
    }
}
