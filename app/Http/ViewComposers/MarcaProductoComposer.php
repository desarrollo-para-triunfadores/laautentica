<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Marca;
use App\Localidad;
use App\Tipoproducto;


class MarcaProductoComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {      
        $localidades = Localidad::orderBy('nombre','ASC')->lists('nombre','id');
        $tipos = Tipoproducto::orderBy('nombreTipo','ASC')->lists('nombreTipo','id');

        $view->with('localidades', json_decode($localidades, true))
            ->with('tipos', json_decode($tipos, true));
    }

}