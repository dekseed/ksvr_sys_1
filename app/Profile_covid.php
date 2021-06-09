<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_covid extends Model
{
    public function training_unit_army()
    {
        return $this->belongsTo('App\Training_unit_army', 'training_unit_army_id');
    }

    public function address_user_covid()
    {
        return $this->belongsTo('App\Address_user_covid', 'add_covid_id');
    }

    public function come_back_add_user_covid()
    {
        return $this->belongsTo('App\Come_back_add_user_covid', 'com_back_add_covid_id');
    }

    public function activity_14_day__covids()
    {

        return $this->hasMany('App\Activity_14_day__covid');
    }

    public function his_place_covid()
    {
        return $this->hasOne('App\His_place_covid');
    }
    public function his_patient_covid()
    {
        return $this->hasOne('App\His_patient_covid');
    }
    public function his_vaccine()
    {
        return $this->hasOne('App\His_vaccine');
    }

    public function his_vaccine_covid_19()
    {
        return $this->hasOne('App\His_vaccine_covid_19');
    }

    public function u_sick_covid()
    {
        return $this->hasOne('App\U_sick_covid');
    }
    public function occup_soldier_covid()
    {
        return $this->hasOne('App\Occup_soldier_covid');
    }
}
