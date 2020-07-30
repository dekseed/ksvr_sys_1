<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMedicalHistoryOtherToCheckUpAdminPolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_up_admin_pols', function (Blueprint $table) {
            $table->string('medical_history_other')->nullable()->after('medical_history');
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
            $table->dropColumn('medical_history_other');
        });
    }
}
