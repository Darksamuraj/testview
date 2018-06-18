<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class charakter extends Model
{
    protected $table = 'characters';
      public function user() {
  		  return $this->hasOne('App\User');
 		 }
}
