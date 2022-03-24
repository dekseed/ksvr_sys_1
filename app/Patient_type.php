<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_type extends Model
{
    public function patien_type_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
