<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_check_up_main extends Model
{
    use HasFactory;

    public function report_check_up_main_urine()
    {
        // return $this->hasOne(Report_check_up_urine::class);
        return $this->belongsTo('App\Report_check_up_urine', 'report_check_up_urine_id');
    }

    public function report_check_up_cbc()
    {
        // return $this->hasOne(Report_check_up_cbc::class);
        return $this->belongsTo( 'App\Report_check_up_cbc', 'report_check_up_cbc_id');
    }

    public function report_check_up_main_detail_1()
    {
        // return $this->hasOne(Report_check_up_cbc::class);
        return $this->belongsTo( 'App\Report_check_up_detail_1', 'report_check_up_detail_1_id');
    }

}