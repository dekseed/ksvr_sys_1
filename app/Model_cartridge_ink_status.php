<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_cartridge_ink_status extends Model
{
    public function stock_wastes_outcome_model_cartridge_ink()
    {
        return $this->belongsTo('App\Stock_wastes_outcome_model_cartridge_ink', 'stock_wastes_outcome_model_cartridge_ink_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id_update');
    }


}
