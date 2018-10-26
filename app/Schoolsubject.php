<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolsubject extends Model
{
    use softDeletes;

    protected $fillable = [
        'name'

    ];
}
