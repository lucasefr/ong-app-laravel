<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'rating'

    ];

    protected $dates = ['delete_at'] ;
}
