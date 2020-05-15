<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->commnet('รหัสผู้ใช้');
            $table->integer('repair_id')->unsigned()->commnet('รหัสแจ้งซ่อม');

            // $table->integer('status_id')->nullable()->commnet('สถานะ');
            $table->text('detail')->nullable()->commnet('รายละเอียด');
            $table->text('note')->nullable()->commnet('หมายเหตุ');
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
        Schema::dropIfExists('repair_statuses');
    }
}
