<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrainingUnitArmyDetailToProfileCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_covids', function (Blueprint $table) {
            $table->string('training_unit_army_detail')->nullable()->comment('อื่นๆ')->after('training_unit_army_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_covids', function (Blueprint $table) {
            $table->dropColumn('training_unit_army_detail');
        });
    }
}
