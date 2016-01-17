<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Empresa;

class MarcaComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $empresas = Empresa::orderBy('nombre','ASC')->lists('nombre','id');        

        $view->with('empresas',json_decode($empresas, true));
    }

}