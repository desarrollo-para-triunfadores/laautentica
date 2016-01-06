<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo_Producto extends Model
{
    protected $table =  "imagenes_productos";

    protected $fillable = ['nombre', 'producto_id'];

    public function producto() 
    {
    	return $this->belongsTo('App\Producto');
    }
}
