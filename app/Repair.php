<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function category_equipment()
    {

        return $this->belongsTo('App\Category_equipment', 'category_equipment_id');
    }
    public function stock()
    {

        return $this->belongsTo('App\Stock', 'stock_id');
    }

    public function status_repair()
    {

        return $this->belongsTo('App\Status_repair', 'status_id');
    }

    public function repair_statuss()
    {
        return $this->hasMany('App\Repair_status');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }
}
