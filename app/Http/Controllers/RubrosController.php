<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rubro;
use Laracasts\Flash\Flash;
use App\Http\Requests\RubroRequestCreate;
use App\Http\Requests\RubroRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class RubrosController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->rubro = Rubro::find($route->getParameter('rubros'));  // rubros es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubros = Rubro::all();
        return view('admin.rubros.tabla')->with('rubros',$rubros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rubros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RubroRequestCreate $request)
    {
        $rubro = new Rubro($request->all());
        $rubro->save();
        Flash::success('El rubro "'. $rubro->nombre.'" ha sido registrado de forma existosa.');
        return redirect()->route('admin.rubros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.rubros.show')->with('rubro',$this->rubro);
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
    public function update(RubroRequestEdit $request, $id)
    {
        $this->rubro->fill($request->all());
        $this->rubro->save();
        Flash::success("Se ha realizado la actualización del registro: ".$this->rubro->nombre.".");
        return redirect()->route('admin.rubros.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->rubro->delete();
        Flash::error("Se ha realizado la eliminación del registro: ".$this->rubro->nombre.".");
        return redirect()->route('admin.rubros.index');
    }
}
