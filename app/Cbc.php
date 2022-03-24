<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cbc extends Model
{
    public function cbc_in_form()
    {
                return $this->hasMany('App\Covid19_inquiry_form', 'id');
    }
}
