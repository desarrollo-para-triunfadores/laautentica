<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Producto;
use App\Tipoproducto;
use Illuminate\Routing\Route;

class frontMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $marcas = Marca::searchNombres($request->nombre)
        ->searchEstado($request->estado)
        ->searchActivos()
        ->searchEmpresa($request->idempresa)
        ->orderBy('nombre','ASC')
        ->paginate(); 

        //Retorno todos los registros de marcas según las especificaciones dadas a la variable recien creada.
        if($request->ajax()){ //Si la solicitud fue realizada utilizando ajax se devuelven los registros únicamente a la tabla.
            return response()->json(view('front.marcas.contenidoTabla',compact('marcas'))->render());
        }
        return view('front.marcas.index')->with('marcas',$marcas); //Retorno al cliente la vista asociada al método con la colección de registros necesesarios.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = Marca::find($id);
        $productoslista = Producto::searchMarcas($id)->searchActivos()->orderBy('nombre','ASC')->lists('nombre','nombre');
        $tipos = Tipoproducto::orderBy('nombreTipo','ASC')->lists('nombreTipo','id');
        $productos = Producto::searchMarcas($id)
            ->searchActivos()
            ->orderBy('nombre','ASC')
            ->paginate();

        return view('front.marcas.showMarca')
            ->with('tipos', json_decode($tipos, true))
            ->with('productoslista', json_decode($productoslista, true))
            ->with('productos',$productos)
            ->with('marca',$marca); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}