<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_up_admin_pol extends Model
{
    public function check_up_user_pol()
    {
        return $this->belongsTo('App\Check_up_user_pol', 'user_pols_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    
}
