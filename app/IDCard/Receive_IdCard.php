<?php

namespace App\IDCard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receive_IdCard extends Model
{
    use HasFactory;

    public function statusIDCard()
    {
        return $this->belongsTo('App\IDCard\StatusIDCard', 'status_i_d_cards_id');
    }

    public function iDCard()
    {
        return $this->belongsTo('App\IDCard\IDCard', 'i_d_cards_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function user_id_update()
    {
        return $this->belongsTo('App\User', 'user_id_update');
    }

    public function receive_signed()
    {
        return $this->belongsTo('App\IDCard\ReceiveSignedIdCard', 'receive_signed_id_cards_id');
    }

    public function rec_timeline_IdCard()
    {
        return $this->belongsTo('App\IDCard\ReceiveTimelineIdCard', 'receive_timeline_id_cards_id');
    }

}
