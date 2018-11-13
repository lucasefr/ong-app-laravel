<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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



    public function director()
    {
        return $this->belongsTo('App\Director');
    }

    public function administrator()
    {
        return $this->belongsTo('App\Administrator');
    }

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }


}
