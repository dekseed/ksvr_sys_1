<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHealthCheckResultsIdToReportCheckUpMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('report_check_up_mains', function (Blueprint $table) {

                $table->unsignedBigInteger('health_check_results_id')->after('report_check_up_detail_1_id')->foreign('health_check_results_id')->references('id')->on('health_check_results')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('report_check_up_mains', function (Blueprint $table) {
            $table->dropForeign(['health_check_results_id']);
        });
    }
}
