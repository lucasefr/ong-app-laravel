<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'year',
        'semester',
        'email',
        'start',
        'end'

    ];
}
