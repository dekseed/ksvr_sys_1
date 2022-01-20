<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRepairGenusesIdToStockWastesOutcomeModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes_outcome_model_cartridge_inks', function (Blueprint $table) {
            $table->integer('genus_repairs_id')->unsigned()->after('model_cartridge_inks_id')->comment('ประเภทการดำเนินงาน');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_wastes_outcome_model_cartridge_inks', function (Blueprint $table) {
            $table->dropColumn('genus_repairs_id');
        });
    }
}
