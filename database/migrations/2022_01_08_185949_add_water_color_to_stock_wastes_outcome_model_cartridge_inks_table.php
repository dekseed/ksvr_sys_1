<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWaterColorToStockWastesOutcomeModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes_outcome_model_cartridge_inks', function (Blueprint $table) {
            $table->integer('water_color_id')->unsigned()->after('model_cartridge_inks_id')->comment('สีน้ำ');
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
            $table->dropColumn('water_color_id');
        });
    }
}
