<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_kind extends Model
{

    protected $fillable = ['name'];

    public function category_equipment()
    {

        return $this->belongsTo('App\Category_equipment', 'category_equipment_id');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
    
    public function repairs()
    {
        return $this->hasMany('App\Repair');
    }
}
