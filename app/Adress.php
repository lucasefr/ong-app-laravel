<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adress extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'street',
        'number',
        'complement',
        'state',
        'city',
        'cep'
    ];

    protected $dates = ['created_at', 'updated_at', 'delete_at'] ;



    public function directors()
    {
        return $this->hasMany('App\Director');
    }

    public function administrators()
    {
        return $this->hasMany('App\Administrator');
    }

    // public function person()
    // {
    //     return $this->hasMany('App\Person');
    // }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher');
    }

    public function cities()
    {
        return $this->belongsTo('App\City');
    }


}
