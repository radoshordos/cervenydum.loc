<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Apartment extends Model
{
    public const SELL_WORD = 'Prodej';

    protected $table = 'apartment';
    public $timestamps = false;

    public function byty(): HasOne
    {
        return $this->hasOne(Byt::class, 'id', 'byt_id');
    }
}
