<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_waste_kind extends Model
{
    protected $fillable = ['name'];

    public function category_waste()
    {

        return $this->belongsTo('App\Category_wastes', 'category_wastes_id');
    }

    public function stock_wastes()
    {
        return $this->hasMany('App\Stock_waste');
    }

}
