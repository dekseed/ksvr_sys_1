<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search_covid19_inquiry extends Model
{
    public function search_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }
}
