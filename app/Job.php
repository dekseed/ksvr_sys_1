<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function cate_job()
    {

        return $this->belongsTo('App\CatJob', 'cate_job_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }

    public function user_update()
    {

        return $this->belongsTo('App\User', 'user_edit_id');
    }

}
