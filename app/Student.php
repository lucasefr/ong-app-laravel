<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
