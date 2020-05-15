<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_waste_quantity extends Model
{
    public function stock_waste()
    {
        return $this->belongsTo('App\Stock_waste', 'stock_waste_id');
    }


}
