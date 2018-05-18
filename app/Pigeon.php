<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pigeon extends Model
{
    //
    protected $fillable = [
        'name', 'color', 'country'
    ];
}
