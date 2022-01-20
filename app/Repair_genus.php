<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair_genus extends Model
{
    protected $fillable = ['name'];

    public function repairs()
    {
        return $this->hasMany('App\Repair');
    }

    public function stock_wastes_outcome_model_cartridge_inks()
    {
        return $this->hasMany('App\Stock_wastes_outcome_model_cartridge_ink');
    }
}
