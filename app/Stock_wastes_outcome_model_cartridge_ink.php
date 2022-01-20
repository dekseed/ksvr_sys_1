<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_wastes_outcome_model_cartridge_ink extends Model
{
    public function stock()
    {
        return $this->belongsTo('App\Stock', 'stock_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id');
    }

    public function status_repair()
    {
        return $this->belongsTo('App\Status_repair', 'status_id');
    }

    public function water_color()
    {
        return $this->belongsTo('App\Water_color', 'water_color_id');
    }

    public function repair_genus()
    {
        return $this->belongsTo('App\Repair_genus', 'genus_repairs_id');
    }
}
