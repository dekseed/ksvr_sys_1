<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCongenitalDiseaseDetailToCheckUpAdminPolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_up_admin_pols', function (Blueprint $table) {
                $table->string('congenital_disease_detail')->nullable()->after('medical_history');
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
            $table->dropColumn('congenital_disease_detail');
        });
    }
}
