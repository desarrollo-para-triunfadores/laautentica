<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table =  "empresas";

    protected $fillable = ['nombre', 'telefono', 'celular', 'email', 'web', 'rubro_id', 'calle', 'altura', 'localidad_id'];

    public function localidad() 
    {
    	return $this->belongsTo('App\Localidad');
    }

    public function rubro() 
    {
        return $this->belongsTo('App\Rubro');
    }

    public function marcas() 
    {
    	return $this->hasMany('App\Marca');
    }

    public function logo_empresa()
    {
        return $this->hasOne('App\Logo_Empresa');
    }

    public function scopeSearchNombres($query, $name)
    {           
        if ($name == "-1")
            {
               return $query;
            } else {
               return $query->where('nombre', 'LIKE', $name);
            } 
        
    }

    public function scopeSearchRubro($query, $idrubro)
    {           
        if ($idrubro == "-1")
            {
               return $query;
            } else {
               return $query->where('rubro_id', 'LIKE', $idrubro);
            } 
    }

    public function scopeSearchOrigen($query, $idOrigen)
    {           
        if ($idOrigen == "-1")
            {
               return $query;
            } else {
               return $query->where('localidad_id', 'LIKE', $idOrigen);
            } 
    }
}
