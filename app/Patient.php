<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function patient_cov_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
