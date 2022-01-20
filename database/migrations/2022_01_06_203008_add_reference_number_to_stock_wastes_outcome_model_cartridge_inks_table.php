<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferenceNumberToStockWastesOutcomeModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes_outcome_model_cartridge_inks', function (Blueprint $table) {
            $table->string('reference_number')->after('id')->comment('รหัสอ้างอิง');
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
            $table->dropColumn('reference_number');
        });
    }
}
