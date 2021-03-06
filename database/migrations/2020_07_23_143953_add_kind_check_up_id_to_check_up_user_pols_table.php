<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKindCheckUpIdToCheckUpUserPolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_up_user_pols', function (Blueprint $table) {
            $table->integer('kind_check_up_id')->unsigned()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('check_up_user_pols', function (Blueprint $table) {
            $table->dropColumn('kind_check_up_id');
        });
    }
}
