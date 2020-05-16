<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair_genus extends Model
{
    protected $fillable = ['name'];

    public function repairs()
    {
        return $this->hasMany('App\Repair');
    }
}
