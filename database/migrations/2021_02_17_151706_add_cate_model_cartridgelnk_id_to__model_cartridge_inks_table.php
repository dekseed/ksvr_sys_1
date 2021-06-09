<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCateModelCartridgelnkIdToModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Model_cartridge_inks', function (Blueprint $table) {
            $table->integer('cat_model_cartridge_inks_id')->unsigned()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Model_cartridge_inks', function (Blueprint $table) {
            //
        });
    }
}
