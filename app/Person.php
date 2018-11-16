<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'phone'

    ];

    protected $dates = ['created_at', 'updated_at', 'bithDate', 'delete_at'] ;

    public function adress(){
        return $this->hasOne('App\Adress');
    }


}
