<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function status_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
