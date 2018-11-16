<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estate extends Model
{
    //

    use softDeletes;

    protected $fillable = [
        'name'

    ];

    public function cities (){
        return $this->hasMany('App\City');
    }
}
