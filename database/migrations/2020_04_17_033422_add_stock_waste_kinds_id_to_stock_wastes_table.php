<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStockWasteKindsIdToStockWastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_wastes', function (Blueprint $table) {
            $table->integer('stock_waste_kinds_id')->unsigned()->commnet('รหัสประเภท')->after('category_wastes_id');
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
            $table->dropColumn('stock_waste_kinds_id');
        });
    }
}
