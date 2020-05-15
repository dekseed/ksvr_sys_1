<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdUpdateToRepairStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_statuses', function (Blueprint $table) {
            $table->integer('user_id_update')->unsigned()->commnet('userอัพเดตข้อมูล')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair_statuses', function (Blueprint $table) {
            $table->dropColumn('user_id_update');
        });
    }
}
