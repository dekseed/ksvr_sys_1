<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department');
            $table->integer('b2_1')->nullable();
            $table->integer('b2_2')->nullable();
            $table->integer('b2_3')->nullable();
            $table->integer('b2_4')->nullable();
            $table->integer('b2_5')->nullable();
            $table->integer('b2_6')->nullable();
            $table->integer('b2_7')->nullable();
            $table->integer('b2_8')->nullable();
            $table->integer('b2_9')->nullable();
            $table->integer('b2_10')->nullable();
            $table->integer('b2_11')->nullable();
            $table->integer('b2_12')->nullable();
            $table->integer('b2_13')->nullable();
            $table->integer('b2_14')->nullable();
            $table->integer('b2_15')->nullable();
            $table->integer('c3_1_1')->nullable();
            $table->integer('c3_1_2')->nullable();
            $table->integer('c3_1_3')->nullable();
            $table->integer('c3_2_1')->nullable();
            $table->integer('c3_2_2')->nullable();
            $table->integer('c3_2_3')->nullable();
            $table->integer('c3_3_1')->nullable();
            $table->integer('c3_3_2')->nullable();
            $table->integer('c3_3_3')->nullable();
            $table->integer('c3_4_1')->nullable();
            $table->integer('c3_4_2')->nullable();
            $table->integer('c3_4_3')->nullable();
            $table->integer('c3_5_1')->nullable();
            $table->integer('c3_5_2')->nullable();
            $table->integer('c3_5_3')->nullable();
            $table->integer('c3_6_1')->nullable();
            $table->integer('c3_6_2')->nullable();
            $table->integer('c3_6_3')->nullable();
            $table->integer('c3_7_1')->nullable();
            $table->integer('c3_7_2')->nullable();
            $table->integer('d4_1')->nullable();
            $table->text('notes');
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
        Schema::dropIfExists('assessments');
    }
}
