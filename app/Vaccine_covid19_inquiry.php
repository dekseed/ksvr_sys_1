<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine_covid19_inquiry extends Model
{

    public function name_vac1_inquirie_1()
    {
        return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_1');
    }

    public function name_vac1_inquirie_2()
    {
        return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_2');
    }

    public function name_vac1_inquirie_3()
    {
        return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_3');
    }

    public function name_vac1_inquirie_4()
    {
        return $this->belongsTo('App\Name_vaccine_covid19_inquiry', 'name_vaccine_id_4');
    }

    public function user_vac()
    {
        return $this->belongsTo('App\User_covid19_inquiry', 'user_id');
    }

}
