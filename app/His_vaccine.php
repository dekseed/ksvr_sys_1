<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class His_vaccine extends Model
{
    public function profile_covid()
    {
        return $this->belongsTo('App\Profile_covid', 'profile_covid_id');
    }
}
