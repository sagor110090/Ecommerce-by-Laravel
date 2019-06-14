<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
 public function category()
 {
     return $this->belongsTo('App\Category');
 }  

 public function size()
 {
     return $this->belongsTo('App\size');
 }
}
