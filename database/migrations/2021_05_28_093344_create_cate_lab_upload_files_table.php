<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateLabUploadFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_lab_upload_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('ชื่อประเภท');
            $table->text('description')->nullable()->comment('ราายละเอียด');
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
        Schema::dropIfExists('cate_lab_upload_files');
    }
}
