<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCheckUp extends Model
{
    public function title_name()
    {

        return $this->belongsTo('App\Title_name', 'title_name_id');
    }
}
