<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report1_2 extends Model
{
    public function report()
    {
        return $this->belongsTo('App\Report1', 'report1_id');
    }
}
