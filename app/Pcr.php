<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcr extends Model
{
    public function clinic_cov_forms()
    {
        return $this->hasMany('App\Clinic_covid19_inquiry');
    }
}
