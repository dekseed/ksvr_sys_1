<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address_user_covid extends Model
{
    public function profile_covids()
    {

        return $this->hasMany('App\Profile_covid');
    }
}
