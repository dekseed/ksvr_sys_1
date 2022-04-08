<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_check_up_urine extends Model
{
    use HasFactory;

    public function reportCheckUpUrins()
    {

        return $this->belongsTo('App\ReportCheckUp', 'report_check_up_id');

    }

    public function reportCheckUpMains()
    {

        return $this->hasMany( 'App\Report_check_up_main');
        // return $this->hasOne(Report_check_up_main::class);

    }
}
