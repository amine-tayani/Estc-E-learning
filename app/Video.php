<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "video";


    public function cours()
    {
        return $this->belongsTo('App\Cours', 'cours_id');
    }

    protected $fillable = [
        'video','cours_id'
    ];

}
