<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveTimelineIdCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_timeline_id_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receive_id_cards_id');
            $table->unsignedBigInteger('status_i_d_cards_id')->comment('สถานะ');
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
        Schema::dropIfExists('receive_timeline_id_cards');
    }
}
