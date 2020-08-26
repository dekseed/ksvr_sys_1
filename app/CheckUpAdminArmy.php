<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckUpAdminArmy extends Model
{
    public function kind_check_up()
    {
        return $this->belongsTo('App\Kind_check_up', 'kind_check_up_id');
    }
}
