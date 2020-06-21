<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{

  public function parties()
  {
      return $this->hasMany('App\Partie', 'cours_id', 'id');
  }



    protected $fillable = [
        'libele','description','pdf'
    ];

}
