<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $casts = [
        'choices' => 'array'
    ];
}
