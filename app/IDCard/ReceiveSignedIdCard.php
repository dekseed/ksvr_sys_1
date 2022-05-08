<?php

namespace App\IDCard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiveSignedIdCard extends Model
{
    use HasFactory;

    public function receive_IdCards()
    {
        return $this->hasMany('App\IDCard\Receive_IdCard');
    }
}
