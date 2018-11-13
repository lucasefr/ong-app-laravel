<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone',
        'adress_id'
    ];

    protected $dates = ['created_at', 'updated_at', 'bithDate', 'delete_at'] ;

    public function adress(){
        return $this->hasOne('App\Adress');
    }
}
