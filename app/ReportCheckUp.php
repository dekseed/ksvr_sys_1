<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCheckUp extends Model
{
    public function title_name()
    {

        return $this->belongsTo('App\Title_name', 'title_name_id');
    }

    public function kind_check_up()
    {

        return $this->belongsTo('App\Kind_check_up', 'kind_check_up_id');
    }

    public function report_check_up_detail_1s()
    {

        // return $this->hasMany( 'App\Report_check_up_detail_1');
        return $this->hasMany(Report_check_up_detail_1::class);
    }

    public function report_check_up_urines()
    {

        return $this->hasMany(Report_check_up_urine::class);
        // return $this->hasMany( 'App\Report_check_up_urine');
    }

    public function report_check_up_cbcs()
    {
        return $this->hasMany(Report_check_up_cbc::class);
        // return $this->hasMany( 'App\Report_check_up_cbc');
    }

    public function report_check_up_mains()
    {
        return $this->hasMany(Report_check_up_main::class);
        // return $this->hasMany( 'App\Report_check_up_cbc');
    }

    public function users()
    {
        return $this->hasMany(User::class);
        // return $this->hasMany( 'App\Report_check_up_cbc');
    }


}
