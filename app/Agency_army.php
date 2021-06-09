<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency_army extends Model
{
    public function training_unit_armys()
    {

        return $this->hasMany('App\Training_unit_army');
    }
}
