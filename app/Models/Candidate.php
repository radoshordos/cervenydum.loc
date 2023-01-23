<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public $timestamps = true;
    protected $table = 'poptavka';

    protected $guarded = [];
}
