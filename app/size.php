<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    public function items()
    {
        return $this->hasMany('App\Item');
    }

}
