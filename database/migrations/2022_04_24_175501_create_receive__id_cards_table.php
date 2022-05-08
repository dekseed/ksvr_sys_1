<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveIdCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive__id_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('รหัสผู้ใช้');
            $table->unsignedBigInteger('user_id_update')->comment('userอัพเดตข้อมูล');
            $table->unsignedBigInteger('status_i_d_cards_id')->comment('สถานะ');
            $table->unsignedBigInteger('i_d_cards_id');
            $table->text('note')->nullable()->comment('หมายเหตุ');
            $table->string('signed')->nullable()->comment('ลายเซ็นต์');
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
        Schema::dropIfExists('receive__id_cards');
    }
}
