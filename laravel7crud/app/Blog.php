<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use softDeletes;

    protected $fillable = [
        'title', 'description','image'
    ];
}
