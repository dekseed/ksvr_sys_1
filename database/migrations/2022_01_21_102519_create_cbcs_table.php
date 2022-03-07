<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable()->comment('วันที่');
            $table->string('hb')->nullable()->comment('ผล Hb');
            $table->string('htc')->nullable()->comment('ผล Htc');
            $table->string('platelet')->nullable()->comment('ผล Platelet count');
            $table->string('wbc')->nullable()->comment('ผล WBC');
            $table->string('n')->nullable()->comment('ผล N');
            $table->string('l')->nullable()->comment('ผล L');
            $table->string('atyp')->nullable()->comment('ผล Atyp Lymph');
            $table->string('mono')->nullable()->comment('ผล Mono');
            $table->string('other_details')->nullable()->comment('รายละเอียด');
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
        Schema::dropIfExists('cbcs');
    }
}
