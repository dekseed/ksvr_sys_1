<?php

namespace App\IDCard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IDCard extends Model
{
    use HasFactory;

    public function receive_IdCards()
    {
        return $this->hasMany('App\IDCard\Receive_IdCard');
    }

    public function cateStatusIDCard()
    {
        return $this->belongsTo('App\IDCard\CateStatusIDCard', 'cate_status_i_d_cards_id');
    }

    public function title_name()
    {
        return $this->belongsTo('App\Title_name', 'title_name_id');
    }

    public function cateIDCard()
    {
        return $this->belongsTo('App\IDCard\CateIDCard', 'cate_i_d_cards_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
