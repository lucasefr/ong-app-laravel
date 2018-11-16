<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    //

    use softDeletes;

    protected $fillable = [
        'name'

    ];

    protected $dates = ['created_at', 'updated_at', 'delete_at'] ;

    public function estates()
    {
        return $this->belongsTo('App\Estate');
    }

    public function adresses()
    {
        return $this->hasMany('App\Adress');
    }
}
