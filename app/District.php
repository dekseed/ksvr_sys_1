<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{


    public function province_surveillance_area_covids()
    {
        return $this->hasMany('App\Province_surveillance_area_covid');
    }

    public function come_back_dists()
    {
        return $this->hasMany('App\Come_back_add_user_covid');
    }


    public function covid_inq_users()
    {
        return $this->hasMany('App\User_covid19_inquiry');
    }
}
