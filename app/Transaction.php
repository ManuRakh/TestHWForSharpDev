<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'userid', 'towhom', 'amount','leftamount',
    ];

}