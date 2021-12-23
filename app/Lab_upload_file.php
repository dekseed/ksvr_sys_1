<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab_upload_file extends Model
{
    public function cate_lab_upload_file()
    {

        return $this->belongsTo('App\Cate_lab_upload_file', 'cate_lab_upload_file_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }
}
