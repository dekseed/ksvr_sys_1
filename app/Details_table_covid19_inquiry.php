<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details_table_covid19_inquiry extends Model
{
    public function detail_his_forms()
    {
        return $this->hasMany('App\User_covid19_inquiry');
    }
}
