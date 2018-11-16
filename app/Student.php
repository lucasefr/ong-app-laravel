<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
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

    public function adresses(){
        return $this->belongsTo('App\Adress');
    }
}
