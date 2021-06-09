<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_wastes extends Model
{
    protected $fillable = ['name'];

    public function stock_waste_kids()
    {
        return $this->hasMany('App\Stock_waste_kind');
    }
    public function stock_wastes()
    {
        return $this->hasMany('App\Stock_waste');
    }

}
