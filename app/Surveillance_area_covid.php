<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveillance_area_covid extends Model
{
    protected $fillable = ['name_rating'];

    public function province_surveillance_area_covids()
    {
        return $this->hasMany('App\Province_surveillance_area_covid');
    }

    public function Come_back_add_user_covid()
    {
        return $this->belongsTo('App\Come_back_add_user_covid', 'province_code');
    }
}
