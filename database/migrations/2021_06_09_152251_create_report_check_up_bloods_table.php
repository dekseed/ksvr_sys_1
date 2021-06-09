<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportCheckUpBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_check_up_bloods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('report_check_up_id')->unsigned();
            $table->integer('year')->unsigned();

            $table->string('urine')->nullable()->comment('Urine Examination');
            $table->string('urine_d1')->nullable()->comment('Urine Proteinurea > +1');
            $table->string('urine_d2')->nullable()->comment('Urine Hematuria > +1');
            $table->string('urine_d')->nullable()->comment('Urine ผิดปกติอื่นๆ');
            $table->string('cbc')->nullable()->comment('CBC');
            $table->string('cbc_d')->nullable()->comment('CBC อื่นๆ');

            $table->string('blood_glu')->nullable()->comment('blood chemistry - Glu');
            $table->string('blood_chol')->nullable()->comment( 'blood chemistry - Chol');
            $table->string('blood_tg')->nullable()->comment( 'blood chemistry - Tg');
            $table->string('blood_hdl')->nullable()->comment( 'blood chemistry - HDL-C');
            $table->string('blood_ldl')->nullable()->comment( 'blood chemistry - LDL-C');
            $table->string('blood_bun')->nullable()->comment( 'blood chemistry - Bun');
            $table->string('blood_cr')->nullable()->comment( 'blood chemistry - Cr');
            $table->string('blood_uric')->nullable()->comment( 'blood chemistry - Uric');
            $table->string('blood_ast')->nullable()->comment( 'blood chemistry - AST');
            $table->string('blood_alt')->nullable()->comment( 'blood chemistry - ALT');

            $table->string('pap')->nullable()->comment('pap smear');
            $table->string('pap_d')->nullable()->comment('pap smear ผิดปกติอื่นๆ');

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
        Schema::dropIfExists('report_check_up_bloods');
    }
}
