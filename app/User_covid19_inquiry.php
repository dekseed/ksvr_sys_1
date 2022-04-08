<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_covid19_inquiry extends Model
{
    public function cov_in_forms()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }

    public function title_name()
    {
        return $this->belongsTo('App\Title_name', 'title_name_id');
    }

    public function vac_covids()
    {
        return $this->hasMany('App\Vaccine_covid19_inquiry');
    }


    public function district_covid()
    {
        return $this->belongsTo('App\District', 'district_id');
    }


    public function sexes_inquir()
    {
        return $this->belongsTo('App\Sexes', 'sex_id');
    }

    public function details_table_covid19_inquiry()
    {
        return $this->belongsTo('App\Details_table_covid19_inquiry', 'details_table_covid19_inquiry_id');
    }

    public function home_type()
    {
        return $this->belongsTo('App\Home_type', 'home_type_id');
    }


}
