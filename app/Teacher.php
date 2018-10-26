<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Person
{
    //

    use softDeletes;

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone',
        'birthDate',
        'adress'
    ];
}
