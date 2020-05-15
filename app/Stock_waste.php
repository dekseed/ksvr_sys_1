<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_waste extends Model
{


    public function category_waste()
    {

        return $this->belongsTo('App\Category_wastes', 'category_wastes_id');
    }

    public function stock_waste_kind()
    {

        return $this->belongsTo('App\Stock_waste_kind', 'stock_waste_kinds_id');
    }

    public function model_cartridge_ink()
    {

        return $this->belongsTo('App\Model_cartridge_ink', 'model_cartridge_inks_id');
    }

    public function stock_waste_quantities()
    {

        return $this->hasMany('App\Stock_waste_quantity');
    }
}
