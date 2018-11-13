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
        'adress'
    ];

    protected $dates = ['created_at', 'updated_at', 'bithDate', 'delete_at'] ;

    public function adress(){
        return $this->hasOne('App\Adress');
    }
}
