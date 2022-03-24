<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antibody extends Model
{
    public function anti_in_form()
    {
        return $this->hasMany('App\Clinic_covid19_inquiry');
    }
}
