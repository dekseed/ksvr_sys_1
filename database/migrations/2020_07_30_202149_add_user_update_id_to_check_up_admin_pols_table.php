<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserUpdateIdToCheckUpAdminPolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_up_admin_pols', function (Blueprint $table) {
            $table->integer('user_update_id')->unsigned()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('check_up_admin_pols', function (Blueprint $table) {
            $table->dropColumn('user_update_id');
        });
    }
}
