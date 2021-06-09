<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training_unit_army extends Model
{
    public function agency_army()
    {
        return $this->belongsTo('App\Agency_army', 'agency_army_id');
    }

    public function profile_covids()
    {

        return $this->hasMany('App\Profile_covid');
    }
}
