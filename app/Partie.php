<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    protected $table = "partie";




    public function cours()
    {
        return $this->belongsTo('App\Cours', 'cours_id');
    }


    protected $fillable = [
        'titre','contenu','cours_id'
    ];
}
