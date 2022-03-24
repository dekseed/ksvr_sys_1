<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_covid19_inquiry extends Model
{
    public function cli_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }

    public function pcr_test_inquiries()
    {
                return $this->belongsTo('App\Pcr', 'id');
    }

    public function anti_in_inquiries()
    {
                return $this->belongsTo('App\Antibody', 'id');
    }

    public function xray_in_inquiries()
    {
                return $this->belongsTo('App\X_rey', 'id');
    }
}
