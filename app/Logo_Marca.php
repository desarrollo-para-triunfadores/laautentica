<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo_Marca extends Model
{
    protected $table =  "imagenes_marcas";

    protected $fillable = ['nombre', 'marca_id'];

    public function marca() 
    {
    	return $this->belongsTo('App\Marca');
    }
}
