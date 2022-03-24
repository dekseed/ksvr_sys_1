<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_type extends Model
{
    public function home_in_form()
    {
                return $this->hasMany('App\Covid19_inquiry_form');
    }

}
