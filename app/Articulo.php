<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    //

    // protected $fillable=[

    //     "Nombre_Articulo",
    //     "Precio",
    //     "pais_origen",
    //     "observaciones",
    //     "seccion"
        
    // ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function cliente(){

        return $this->belongsTo('App\Cliente');

    }

    

}
