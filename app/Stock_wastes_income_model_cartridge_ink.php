<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_wastes_income_model_cartridge_ink extends Model
{
    public function model_cartridge_ink()
    {
        return $this->belongsTo('App\Model_cartridge_ink', 'model_cartridge_inks_id');
    }
}
