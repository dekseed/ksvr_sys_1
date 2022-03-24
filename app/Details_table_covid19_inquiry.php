<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details_table_covid19_inquiry extends Model
{
    public function detail_his_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
