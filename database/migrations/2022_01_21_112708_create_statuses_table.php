<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('disappear')->nullable()->comment('หาย');
            $table->integer('not')->nullable()->comment('ยัง');
            $table->integer('died')->nullable()->comment('ตาย');
            $table->integer('send')->nullable()->comment('ส่งตัวไป');
            $table->integer('sendhos')->nullable()->comment('รพ.');
            $table->integer('other')->nullable()->comment('อื่นๆ');
            $table->integer('other_details')->nullable()->comment('ลายอะเอียด อื่นๆ');
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
        Schema::dropIfExists('statuses');
    }
}
