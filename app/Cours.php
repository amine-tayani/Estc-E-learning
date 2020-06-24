<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{

  public function parties()
  {
      return $this->hasMany('App\Partie', 'cours_id', 'id');
  }

  public function tds()
  {
      return $this->hasMany('App\Td', 'cours_id', 'id');
  }

  public function tps()
  {
      return $this->hasMany('App\Tp', 'cours_id', 'id');
  }

  public function videos()
  {
      return $this->hasMany('App\Video', 'cours_id', 'id');
  }

    protected $fillable = [
        'libele','description','pdf'
    ];

}
