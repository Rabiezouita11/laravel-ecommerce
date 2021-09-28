<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordre extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
