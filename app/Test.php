<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function test_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
