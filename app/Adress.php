<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'street',
        'number',
        'complement',
        'state',
        'city',
        'cep'
    ];
}
