<?php

namespace App\IDCard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateStatusIDCard extends Model
{
    use HasFactory;

    public function iDCards()
    {
        return $this->hasMany(IDCard::class);
    }
}
