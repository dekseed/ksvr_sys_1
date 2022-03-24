<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    public function users()
    {

        return $this->hasMany('App\User');
    }

    public function stock_wastes_modelCartridgeInks()
    {

        return $this->hasMany('App\Stock_wastes_ModelCartridgeInk');
    }

    public function stocks()
    {

        return $this->hasMany('App\Stock');
    }

    public function stock_wastes_outcome_model_cartridge_ink()
    {

        return $this->hasMany('App\Stock_wastes_outcome_model_cartridge_ink');
    }
}
