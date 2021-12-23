<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStockWastesModelCartridgeInksIdToRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->integer('stock_wastes__model_cartridge_inks_id')->unsigned()->nullable()->after('genus_repairs_id')->comment('รหัสตลับหมึก');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->dropColumn('stock_wastes__model_cartridge_inks_id');
        });
    }
}
