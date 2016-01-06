<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo_Empresa extends Model
{
    protected $table =  "imagenes_empresas";

    protected $fillable = ['nombre','empresa_id'];

    public function empresa() 
    {
    	return $this->belongsTo('App\Empresa');
    }
}
