<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHisPlaceCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('his_place_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profile_covid_id')->unsigned();
            $table->string('info')->comment('รายละเอียด');
            $table->string('de_store')->nullable()->comment('ห้าง');
            $table->string('market')->nullable()->comment('ตลาด');
            $table->string('measure')->nullable()->comment('วัด');
            $table->string('Stadium')->nullable()->comment('สนามกีฬา');
            $table->string('Ent_place')->nullable()->comment('สถานบันเทิง');
            $table->string('detail_where')->nullable()->comment('อื่นๆ');
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
        Schema::dropIfExists('his_place_covids');
    }
}
