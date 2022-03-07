<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXReysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_reys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable()->comment('เมื่อวันที่');
            $table->string('result')->nullable()->comment('ระบุผล');
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
        Schema::dropIfExists('x_reys');
    }
}
