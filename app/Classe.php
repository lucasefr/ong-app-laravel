<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
