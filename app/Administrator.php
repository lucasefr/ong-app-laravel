<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
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
