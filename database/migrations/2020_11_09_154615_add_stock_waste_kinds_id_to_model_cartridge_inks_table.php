<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStockWasteKindsIdToModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('model_cartridge_inks', function (Blueprint $table) {
            $table->integer('category_wastes_id')->unsigned()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('model_cartridge_inks', function (Blueprint $table) {
            $table->dropColumn('category_wastes_id');
        });
    }
}
