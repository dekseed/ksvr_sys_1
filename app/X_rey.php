<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_rey extends Model
{
    public function xray_in_form()
    {
        return $this->hasMany('App\Clinic_covid19_inquiry');
    }
}
