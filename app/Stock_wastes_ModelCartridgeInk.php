<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_wastes_ModelCartridgeInk extends Model
{
    public function model_cartridge_ink()
    {
        return $this->belongsTo('App\Model_cartridge_ink', 'model_cartridge_inks_id');
    }

    public function department()
    {

        return $this->belongsTo('App\Department', 'department_id');
    }

    public function stock()
    {

        return $this->belongsTo('App\Stock', 'stocks_id');
    }
}
