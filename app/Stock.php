<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }

    public function user_update()
    {

        return $this->belongsTo('App\User', 'user_id_update');
    }

    public function user_stock()
    {

        return $this->belongsTo('App\User', 'stock_user_id');
    }

    public function stock_kind()
    {

        return $this->belongsTo('App\Stock_kind', 'stock_kinds_id');
    }

    public function category_equipment()
    {

        return $this->belongsTo('App\Category_equipment', 'category_equipments_id');
    }

    public function brand()
    {

        return $this->belongsTo('App\Brand', 'brand_id');
    }

    public function repairs()
    {
        return $this->hasMany('App\Repair');
    }
}
