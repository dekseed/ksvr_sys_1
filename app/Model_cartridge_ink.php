<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_cartridge_ink extends Model
{
    protected $fillable = ['name'];

    public function stock_wastes()
    {
        return $this->hasMany('App\Stock_waste');
    }
    public function cateModelCartridgeInk()
    {
        return $this->belongsTo('App\CateModelCartridgeInk', 'cate_model_cartridge_inks_id');
    }

    public function stock_wastes_ModelCartridgeInks()
    {
        return $this->hasMany('App\Stock_wastes_ModelCartridgeInk');
    }
}
