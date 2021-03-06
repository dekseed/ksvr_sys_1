<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    public function cate_tender()
    {

        return $this->belongsTo('App\CateTender', 'cate_tender_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }

    public function user_update()
    {

        return $this->belongsTo('App\User', 'user_edit_id');
    }

}
