<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine_covid19_inquiry extends Model
{
    public function vaccine_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }

    public function name_vac1_inquiries()
    {
                return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_1');

    }
    public function name_vac2_inquiries()
    {
                return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_2');

    }
    public function name_vac3_inquiries()
    {
                return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_3');

    }
    public function name_vac4_inquiries()
    {
                return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_4');

    }
}
