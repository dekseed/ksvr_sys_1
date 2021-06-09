<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_wastes_ModelCartridgeInk extends Model
{
    public function model_cartridge_ink()
    {
        return $this->belongsTo('App\Model_cartridge_ink', 'cate_model_cartridge_inks_id');
    }
}
