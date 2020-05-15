<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_repair extends Model
{
    protected $fillable = ['name'];

    public function repairs()
    {
        return $this->hasMany('App\Repair');
    }
}
