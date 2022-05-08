<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameEngToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {


            $table->string('last_name_eng')->nullable()->after('last_name');
            $table->string('first_name_eng')->nullable()->after('last_name');
            $table->unsignedBigInteger('title_name_eng_id')->after('last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('title_name_eng_id');
            $table->dropColumn('first_name_eng');
            $table->dropColumn('last_name_eng');

        });
    }
}
