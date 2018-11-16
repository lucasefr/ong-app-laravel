<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->belongsTo('App\Adress');
    }
}
