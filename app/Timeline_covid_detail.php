<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline_covid_detail extends Model
{
    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }
}
