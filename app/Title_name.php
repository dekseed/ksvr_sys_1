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
}
