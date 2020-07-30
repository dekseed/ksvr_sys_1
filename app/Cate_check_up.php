<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_check_up extends Model
{
    protected $fillable = ['name'];

     public function kind_check_ups()
    {
        return $this->hasMany('App\Kind_check_up');
    }
}
