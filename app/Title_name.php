<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title_name extends Model
{
    protected $fillable = ['name'];

    public function users()
    {

        return $this->hasMany('App\User');
    }

    public function report_check_up()
    {

        return $this->hasMany('App\ReportCheckUp');
    }

    public function user_covids()
    {
                return $this->hasMany('App\User_covid19_inquiry');
    }

    public function IdCards()
    {
        return $this->hasMany('App\IDCard\IDCard');
    }
}
