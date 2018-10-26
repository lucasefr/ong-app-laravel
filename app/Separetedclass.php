<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Separetedclass extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'hour',
        'day'
    ];
}
