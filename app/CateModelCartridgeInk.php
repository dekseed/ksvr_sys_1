<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateModelCartridgeInk extends Model
{
    public function model_cartridge_inks()
    {
        return $this->hasMany('App\Model_cartridge_ink');
    }
}
