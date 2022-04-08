<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexes extends Model
{
    public function user_covid_sexes()
    {
        return $this->hasMany('App\User_covid19_inquiry');
    }
}
