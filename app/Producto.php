<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table =  "productos";

    protected $fillable = ['nombre', 'descripcion', 'estado', 'costo', 'precio', 'tipoproducto_id', 'marca_id', 'localidad_id'];

    public function tipoproducto() 
    {
    	return $this->belongsTo('App\Tipoproducto');
    }

    public function marca() 
    {
    	return $this->belongsTo('App\Marca');
    }

    public function localidad() 
    {
        return $this->belongsTo('App\Localidad');
    }

    public function logo_producto()
    {
        return $this->hasOne('App\Logo_Producto');
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

    public function scopeSearchMarcas($query, $idMarca)
    {           
        if ($idMarca == "-1")
            {
               return $query;
            } else {
               return $query->where('marca_id', 'LIKE', $idMarca);
            } 
    }

    public function scopeSearchEstado($query, $estado)
    {           
        if ($estado == "-1")
            {
               return $query;
            } else {
               return $query->where('estado', 'LIKE', $estado);
            } 
    }

    public function scopeSearchTipo($query, $idTipo)
    {           
        if ($idTipo == "-1")
            {
               return $query;
            } else {
               return $query->where('tipoproducto_id', 'LIKE', $idTipo);
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
