<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_type extends Model
{
    public function user_in_forms()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }

}
