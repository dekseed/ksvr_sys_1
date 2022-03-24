<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    public function medic_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
