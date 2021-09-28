<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['stock'];
    public function categorie(){
        return $this->belongsTo('App\categorie');
   }



}
