<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_covid19_inquiry extends Model
{
    public function cov_in_form()
    {
        return $this->hasMany('App\Covid19_inquiry_form');
    }

    public function title_name_inquiries()
    {
        return $this->belongsTo('App\Title_name', 'title_name_id');
    }
}
