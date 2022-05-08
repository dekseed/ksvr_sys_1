<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCheckResult extends Model
{
    use HasFactory;

    // public function reportHealthCheckResults()
    // {

    //    // return $this->belongsTo('App\ReportCheckUp', 'report_check_up_id');
    //     return $this->hasMany(ReportCheckUp::class);
    // }

    public function reportCheckUpMains()
    {

        return $this->hasMany( 'App\Report_check_up_main');
        // return $this->hasOne(Report_check_up_main::class);

    }
}
