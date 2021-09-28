<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    public function produits(){
        return $this->hasMany('App\Produit');
    }
}
