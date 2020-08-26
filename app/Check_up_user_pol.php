<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_up_user_pol extends Model
{
    public function check_up_admin_pols()
    {
        return $this->hasMany('App\Check_up_admin_pol');
    }
    public function kind_check_up()
    {
        return $this->belongsTo('App\Kind_check_up', 'kind_check_up_id');
    }
    
   
}
