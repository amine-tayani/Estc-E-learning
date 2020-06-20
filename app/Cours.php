<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'libele','description','pdf'
    ];

}
