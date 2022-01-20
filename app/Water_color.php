<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water_color extends Model
{

    public function stock_wastes_outcome_model_cartridge_inks()
    {

        return $this->hasMany('App\Stock_wastes_outcome_model_cartridge_ink');
    }
}
