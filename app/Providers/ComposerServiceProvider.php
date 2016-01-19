<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    { 
        View::composers
        ([
            'App\Http\ViewComposers\ProductoComposer' => ['admin.productos.contenidoForm', 'admin.productos.cabeceraTabla', 'front.productos.cabeceraTabla'],
            'App\Http\ViewComposers\MarcaComposer' => ['admin.marcas.contenidoForm', 'admin.marcas.cabeceraTabla'],
            'App\Http\ViewComposers\EmpresaComposer' => ['admin.empresas.contenidoForm', 'admin.empresas.cabeceraTabla'],
            'App\Http\ViewComposers\ProfileComposer' => 'welcome'
        ]);
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
