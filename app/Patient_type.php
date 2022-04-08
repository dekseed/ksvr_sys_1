<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_type extends Model
{
    public function clinic_cov_forms()
    {
        return $this->hasMany('App\Clinic_covid19_inquiry');
    }
}
