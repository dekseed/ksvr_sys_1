<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_cartridge_ink extends Model
{
    protected $fillable = ['name'];

    public function stock_wastes()
    {
        return $this->hasMany('App\Stock_waste');
    }

}
