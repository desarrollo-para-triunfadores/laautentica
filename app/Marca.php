<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Marca extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];

    protected $table =  "marcas";

    protected $fillable = ['nombre', 'empresa_id', 'estado'];
    

    public function productos() 
    {
    	return $this->hasMany('App\Producto');
    }
    
    public function empresa() 
    {
        return $this->belongsTo('App\Empresa');
    }
    
    public function logo_marca()
    {
        return $this->hasOne('App\Logo_Marca');
    }

    public function scopeSearchNombres($query, $nombre)
    {           
        if ($nombre == null)
            {
               return $query;
            } else {
               return $query->where('nombre', 'LIKE', $nombre);
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

    public function scopeSearchEmpresa($query, $idempresa)
    {           
        if ($idempresa == "-1")
            {
               return $query;
            } else {
               return $query->where('empresa_id', 'LIKE', $idempresa);
            } 
    }
}
