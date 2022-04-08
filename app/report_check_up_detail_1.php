<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_check_up_detail_1 extends Model
{
    public function report_checkup()
    {
        return $this->belongsTo('App\ReportCheckUp', 'report_check_up_id');
    }

    public function reportCheckUpMains()
    {

        return $this->hasMany( 'App\Report_check_up_main');
        // return $this->hasOne(Report_check_up_main::class);

    }
}
