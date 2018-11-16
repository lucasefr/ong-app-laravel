<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classe extends Model
{
    //
    use softDeletes;

    protected $fillable = [
        'semester',
        'email'

    ];

    protected $dates = ['created_at', 'updated_at', 'year', 'start', 'end', 'delete_at'] ;
}
