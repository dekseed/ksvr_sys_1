<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModelCartridgeInksIdToStockWastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes', function (Blueprint $table) {
            $table->integer('model_cartridge_inks_id')->unsigned()->nullable()->commnet('รหัสรุ่นตลับหมึก')->after('stock_waste_kinds_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_wastes', function (Blueprint $table) {
            $table->dropColumn('model_cartridge_inks_id');
        });
    }
}
