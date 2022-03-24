<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19_inquiry_form extends Model
{
    public function user_c_inquiries()
    {
                return $this->belongsTo('App\User_covid19_inquiry', 'user_id');
    }

    public function vaccine_cov_inquiries()
    {
                return $this->belongsTo('App\Vaccine_covid19_inquiry', 'user_id');
    }

    public function cli_cov_inquiries()
    {
                return $this->belongsTo('App\Clinic_covid19_inquiry', 'id');
    }

    public function detail_cov_inquiries()
    {
                return $this->belongsTo('App\Details_covid19_inquiry', 'id');
    }

    public function histos_cov_inquiries()
    {
                return $this->belongsTo('App\Riskhistory_covid19_inquiry', 'riskhistory_id');
    }

    public function detail_his_inquiries()
    {
                return $this->belongsTo('App\Details_table_covid19_inquiry', 'user_id');
    }

    public function search_id_inquiries()
    {
                return $this->belongsTo('App\Search_covid19_inquiry', 'user_id');
    }

    public function home_type_inquiries()
    {
                return $this->belongsTo('App\Home_type', 'id');
    }

    public function cbc_in_inquiries()
    {
                return $this->belongsTo('App\Cbc', 'id');
    }

    public function patient_in_inquiries()
    {
                return $this->belongsTo('App\Patient', 'id');
    }

    public function patient_type_inquiries()
    {
                return $this->belongsTo('App\Patient_type', 'id');
    }

    public function test_in_inquiries()
    {
                return $this->belongsTo('App\Test', 'id');
    }

    public function medic_in_inquiries()
    {
                return $this->belongsTo('App\Medicine', 'id');
    }

    public function status_in_inquiries()
    {
                return $this->belongsTo('App\Status', 'id');
    }

    public function sexes_inquiries()
    {
        return $this->belongsTo('App\Sexes', 'user_id');
    }

}
