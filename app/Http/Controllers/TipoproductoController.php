<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tipoproducto;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Http\Requests\Tipo_ProductoRequestCreate;
use App\Http\Requests\Tipo_ProductoRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class TipoproductoController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->tipo = Tipoproducto::find($route->getParameter('tipoproducto'));  // tipo_producto es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipoproducto::all();
        return view('admin.tipos.tabla')->with('tipos',$tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tipo_ProductoRequestCreate $request)
    {
        $tipo = new Tipoproducto($request->all());
        $tipo->save();
        Flash::success('El tipo de producto "'. $tipo->nombreTipo.'" ha sido registrado de forma existosa.');
        return redirect()->route('admin.tipoproducto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.tipos.show')->with('tipo',$this->tipo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->tipo->fill($request->all());
        $this->tipo->save();
        Flash::success("Se ha realizado la actualización del registro: ".$this->tipo->nombreTipo.".");
        return redirect()->route('admin.tipoproducto.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tipo->delete(); 
        Flash::error("Se ha realizado la eliminación del registro: ".$this->tipo->nombreTipo.".");              
        return redirect()->route('admin.tipoproducto.index');
    }
}
