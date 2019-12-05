<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    public function articulo(){

        return $this->hasOne('App\Articulo');

    }

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }

    public function perfils(){

        return $this->belongsToMany("App\Perfil");

    }
}
