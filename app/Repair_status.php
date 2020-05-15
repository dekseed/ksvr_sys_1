<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair_status extends Model
{
    public function repair()
    {
        return $this->belongsTo('App\Repair', 'repair_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id_update');
    }

}
