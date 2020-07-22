<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckUpAdminPolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_up_admin_pols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_pols_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('BP_S')->nullable();
            $table->string('BP_D')->nullable();
            $table->string('PULSE')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Height')->nullable();
            $table->string('BML')->nullable();
            $table->string('WAIST')->nullable();

            $table->string('WBC')->nullable();
            $table->string('RBC')->nullable();
            $table->string('Hb')->nullable();
            $table->string('Hct')->nullable();
            $table->string('MCV')->nullable();
            $table->string('PLT')->nullable();
            $table->string('NE')->nullable();
            $table->string('LY')->nullable();
            $table->string('MO')->nullable();
            $table->string('EO')->nullable();
            $table->string('BA')->nullable();

            $table->string('UBlood')->nullable();
            $table->string('ketone')->nullable();
            $table->string('Uglu')->nullable();
            $table->string('Upro')->nullable();
            $table->string('URBC')->nullable();
            $table->string('UWBC')->nullable();
            $table->string('UEPI')->nullable();
            $table->string('StoolWBC')->nullable();
            $table->string('StoolRBC')->nullable();
            $table->string('Ova')->nullable();
            $table->string('Occult')->nullable();

            $table->string('FBS')->nullable();
            $table->string('BUN')->nullable();
            $table->string('Cre')->nullable();
            $table->string('Cric')->nullable();
            $table->string('Chol')->nullable();
            $table->string('Tg')->nullable();
            $table->string('HDL')->nullable();
            $table->string('LDL')->nullable();
            $table->string('ALK')->nullable();
            $table->string('SGOT')->nullable();
            $table->string('SGPT')->nullable();

            $table->string('CXR')->nullable();
            $table->string('congenital_disease')->nullable();
            $table->string('medical_history')->nullable();
            $table->string('Smoke')->nullable();
            $table->string('Drink')->nullable();
            $table->string('exercise')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_up_admin_pols');
    }
}
