<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Empresa;
use App\Marca;

class MarcaComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $empresas = Empresa::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');        
        $marcaslista = Marca::orderBy('nombre','ASC')->searchActivos()->lists('nombre','nombre');
        $view->with('marcaslista', json_decode($marcaslista, true))
             ->with('empresas',json_decode($empresas, true));
    }

}