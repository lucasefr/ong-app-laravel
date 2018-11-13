<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    use softDeletes;

    protected $fillable = [
        'name'

    ];
}
