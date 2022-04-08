<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19_inquiry_form extends Model
{
    public function user()
    {
                return $this->belongsTo('App\User_covid19_inquiry', 'user_id');
    }

    public function histos_cov()
    {
                return $this->belongsTo('App\Riskhistory_covid19_inquiry', 'riskhistory_id');
    }

    public function clinic_cov()
    {
                return $this->belongsTo('App\Clinic_covid19_inquiry', 'clinic_id');
    }

    public function detail_cov()
    {
                return $this->belongsTo('App\Details_covid19_inquiry', 'details_id');
    }

}
