<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_surveillance_area_covid extends Model
{
    //protected $fillable = ['province_code'];
    protected $primaryKey = 'province_code';

    public function distr()
    {
        return $this->belongsTo('App\District', 'province_code');
    }

    public function surveillance_area_covid()
    {
        return $this->belongsTo('App\Surveillance_area_covid', 'province_surveillance_area_covid_id');
    }


}
