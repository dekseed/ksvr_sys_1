<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPicToRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->integer('user_id_update')->unsigned()->commnet('userอัพเดตข้อมูล')->after('user_id');
            $table->string('picname')->default('default.jpg')->nullable()->after('note');
            $table->string('pic')->default('default.jpg')->nullable()->after('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->dropColumn('user_id_update');
            $table->dropColumn('picname');
            $table->dropColumn('pic');
        });
    }
}
