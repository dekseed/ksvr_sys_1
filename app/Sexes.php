<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexes extends Model
{
    public function sex_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
