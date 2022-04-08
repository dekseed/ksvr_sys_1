<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riskhistory_covid19_inquiry extends Model
{
    public function histos_in_forms()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
