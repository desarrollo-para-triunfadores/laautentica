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

        $view->with('marcas',json_decode($marcas, true))
            ->with('localidades', json_decode($localidades, true))
            ->with('tipos', json_decode($tipos, true));
    }

}