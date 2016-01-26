<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Producto;

class ProductoFrontIndexComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $productos = Producto::searchActivos()
        ->orderBy('nombre','ASC')
        ->paginate(6);
        $view->with('productos', $productos);
    }

}