<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateModelCartridgeInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_model_cartridge_inks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('ชื่อประเภท');
            $table->string('unit')->comment('จำนวนนับ');
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
        Schema::dropIfExists('cate_model_cartridge_inks');
    }
}
