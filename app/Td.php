<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Td extends Model
{
    protected $table = "td";

    public function cours()
    {
        return $this->belongsTo('App\Cours', 'cours_id');
    }


    protected $fillable = [
        'titre','contenu','cours_id','pdf'
    ];
}
