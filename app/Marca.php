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

    public function scopeSearchNombres($query, $name)
    {           
        if ($name == null)
            {
               return $query;
            } else {
               return $query->where('nombre', 'LIKE', $name);
            } 
        
    }
}
