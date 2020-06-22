<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tp extends Model
{

    protected $table = "tp";


    public function cours()
    {
        return $this->belongsTo('App\Cours', 'cours_id');
    }
    
    protected $fillable = [
        'titre','contenu','cours_id','pdf'
    ];
}
