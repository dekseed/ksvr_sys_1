<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Come_back_add_user_covid extends Model

{

    public function profile_covids()
    {
        return $this->hasMany('App\Profile_covid');
    }


    public function dist()
    {
        return $this->belongsTo('App\District', 'district_id');
    }

}
