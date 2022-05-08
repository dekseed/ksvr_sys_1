<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIDCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_d_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('cate_i_d_cards_id')->foreign('cate_i_d_cards_id')->references('id')->on('cate_i_d_cards')->onDelete('cascade');
            $table->unsignedBigInteger('cate_status_i_d_cards_id')->foreign('cate_status_i_d_cards_id')->references('id')->on('cate_status_i_d_cards')->onDelete('cascade');
            $table->unsignedBigInteger('status_i_d_cards_id')->foreign('status_i_d_cards_id')->references('id')->on('status_i_d_cards')->onDelete('cascade');
            $table->unsignedBigInteger('title_name_id');
            $table->string('first_name_thai')->nullable();
            $table->string('last_name_thai')->nullable();
            $table->unsignedBigInteger('title_name_eng_id');
            $table->string('first_name_eng')->nullable();
            $table->string('last_name_eng')->nullable();
            $table->string('position')->nullable();
            $table->unsignedBigInteger('receive_IdCard');
            $table->string('picname')->default('default.jpg')->nullable();
            $table->string('pic')->default('default.jpg')->nullable();
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
        Schema::dropIfExists('i_d_cards');
    }
}
