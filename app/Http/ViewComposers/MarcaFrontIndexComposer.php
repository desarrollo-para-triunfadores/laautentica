<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Marca;

class MarcaFrontIndexComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $marcas = Marca::searchActivos()
        ->orderBy('nombre','ASC')
        ->paginate(6);
        $view->with('marcas', $marcas);
    }

}