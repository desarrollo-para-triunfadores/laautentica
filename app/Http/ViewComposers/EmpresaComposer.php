<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Localidad;
use App\Rubro;
use App\Empresa;

class EmpresaComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $empresaslista = Empresa::orderBy('nombre','ASC')->lists('nombre','nombre');
        $localidades = Localidad::orderBy('nombre','ASC')->lists('nombre','id');
        $rubros = Rubro::orderBy('nombre','ASC')->lists('nombre','id');    

        $view->with('rubros', json_decode($rubros, true))
             ->with('empresaslista', json_decode($empresaslista, true))
             ->with('localidades', json_decode($localidades, true));

    }

}