<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStocksIdToStockWastesModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes__model_cartridge_inks', function (Blueprint $table) {
            $table->integer('stocks_id')->unsigned()->nullable()->after('admin_id')->comment('รหัสเครื่อง');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_wastes__model_cartridge_inks', function (Blueprint $table) {
            //
        });
    }
}
