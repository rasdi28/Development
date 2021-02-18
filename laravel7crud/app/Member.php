<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Member extends Model
{
    // use softDeletes;

    protected $fillable = [
        'name', 'email','no_telp','image'
    ];
}
