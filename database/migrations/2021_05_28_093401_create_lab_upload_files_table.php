<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabUploadFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_upload_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('cate_lab_upload_file_id')->nullable()->unsigned();
            $table->integer('user_edit_id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('filename');
            $table->string('file');
            $table->boolean('privacy')->default(0)->comment('สิทธิการใช้งาน');
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
        Schema::dropIfExists('lab_upload_files');
    }
}
