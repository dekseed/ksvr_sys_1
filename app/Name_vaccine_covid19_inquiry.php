<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name_vaccine_covid19_inquiry extends Model
{
    public function name_vac_forms()
    {
            return $this->hasMany('App\Vaccine_covid19_inquiry');
    }
}
