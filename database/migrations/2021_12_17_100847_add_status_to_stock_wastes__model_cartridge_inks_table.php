<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToStockWastesModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes__model_cartridge_inks', function (Blueprint $table) {
            $table->integer('status')->unsigned()->nullable()->after('balance')->comment('สถานะ');
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
            $table->dropColumn('status');
        });
    }
}
