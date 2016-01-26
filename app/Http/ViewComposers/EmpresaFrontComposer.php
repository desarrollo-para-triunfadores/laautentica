<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Localidad;
use App\Rubro;
use App\Empresa;

class EmpresaFrontComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $empresa = Empresa::find(1);    
        $view->with('empresa', $empresa);
    }

}