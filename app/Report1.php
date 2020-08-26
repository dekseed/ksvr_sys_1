<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report1 extends Model
{
    protected $table = 'report1s';
    
    public function report1s()
    {

        return $this->hasMany( 'App\Report1_1');

    }
    public function report2s()
    {

        return $this->hasMany('App\Report1_2');

    }
    public function report3s()
    {

        return $this->hasMany('App\Report1_3');

    }

    public function kind_check_up()
    {
        return $this->belongsTo('App\Kind_check_up', 'kind_check_up_id');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
             $user->report1s()->delete();
             // do the rest of the cleanup...
        });
    }
}
