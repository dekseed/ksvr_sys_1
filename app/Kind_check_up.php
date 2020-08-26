<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind_check_up extends Model
{

     public function cate_check_up()
    {
        return $this->belongsTo('App\Cate_check_up', 'cate_check_up_id');
    }
    
     public function check_up_user_pols()
    {
        return $this->hasMany('App\Check_up_user_pol');
    }

    public function check_up_user_armys()
    {
        return $this->hasMany('App\CheckUpAdminArmy');
    }

    public function report1()
    {
        return $this->hasMany('App\Report1');
    }
}
