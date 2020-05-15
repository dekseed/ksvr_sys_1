<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_equipment extends Model
{

    protected $fillable = ['name'];

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function stock_kinds()
    {
        return $this->hasMany('App\Stock_kind');
    }

    public function repairs()
    {
        return $this->hasMany('App\Repair');
    }
}
