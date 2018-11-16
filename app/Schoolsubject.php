<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schoolsubject extends Model
{
    use softDeletes;

    protected $fillable = [
        'name'

    ];

    protected $dates = ['delete_at'] ;
}
