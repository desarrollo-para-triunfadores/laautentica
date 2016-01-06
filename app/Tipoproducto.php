<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    protected $table =  "tiposproductos";

    protected $fillable = ['nombreTipo'];

    public function productos() 
    {
    	return $this->hasMany('App\Producto');
    }
}
