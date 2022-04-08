<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_covid19_inquiry extends Model
{
    public function cli_in_forms()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }

    public function patient_covid()
    {
                return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function xray_in_inquiry()
    {
                return $this->belongsTo('App\X_rey', 'x_ray_id');
    }

    public function cbc_in_inquiry()
    {
                return $this->belongsTo('App\Cbc', 'cbc_id');
    }

    public function test_in_inquiry()
    {
                return $this->belongsTo('App\Test', 'test_id');
    }

    public function pcr_test_inquiry()
    {
                return $this->belongsTo('App\Pcr', 'pcr_id');
    }

    public function anti_in_inquiry()
    {
                return $this->belongsTo('App\Antibody', 'antibody_id');
    }

    public function patient_type_in_inquiry()
    {
                return $this->belongsTo('App\Patient_type', 'type_id');
    }

    public function medicine_in_inquiry()
    {
                return $this->belongsTo('App\Medicine', 'medicine_id');
    }

    public function status_in_inquiry()
    {
                return $this->belongsTo('App\Status', 'status_id');
    }

}
