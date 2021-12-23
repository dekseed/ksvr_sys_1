<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_lab_upload_file extends Model
{
    public function lab_upload_files()
    {
        return $this->hasMany('App\Lab_upload_file');
    }
}
