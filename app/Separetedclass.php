<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Separetedclass extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'hour',
        'day'
    ];

    protected $dates = ['delete_at'] ;
}
