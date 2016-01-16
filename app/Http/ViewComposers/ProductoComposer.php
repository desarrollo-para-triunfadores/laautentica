<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Marca;
use App\Localidad;
use App\Tipoproducto;

class ProductoComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $marcas = Marca::orderBy('nombre','ASC')->lists('nombre','id');
        $localidades = Localidad::orderBy('nombre','ASC')->lists('nombre','id');
        $tipos = Tipoproducto::orderBy('nombreTipo','ASC')->lists('nombreTipo','id');

$array_numerico_indexado = array(1, "dos", 3, "cuatro");
        array_push($array_numerico_indexado, 5, "seis");

        $view->with('marcas',$array_numerico_indexado)
            ->with('localidades', $localidades)
            ->with('tipos', $tipos);
    }

}