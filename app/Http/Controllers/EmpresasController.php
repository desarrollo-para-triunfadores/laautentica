<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Empresa;
use App\Logo_Empresa;
use Laracasts\Flash\Flash;
use App\Http\Requests\EmpresaRequestCreate;
use App\Http\Requests\EmpresaRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class EmpresasController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->empresa = Empresa::find($route->getParameter('empresas'));  // empresas es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empresas = Empresa::searchNombres($request->nombre)
        ->searchOrigen($request->idorigen)
        ->searchRubro($request->idrubro)
        ->orderBy('id','ASC')
        ->paginate();
        if($request->ajax()){ //Si la solicitud fue realizada utilizando ajax se devuelven los registros únicamente a la tabla.
            return response()->json(view('admin.empresas.tablaLogos',compact('empresas'))->render());
        }
        return view('admin.empresas.index')->with('empresas',$empresas);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequestCreate $request)
    {
        $empresa = new Empresa($request->all());
        $empresa->save();

        //Manipulación de Imágenes...
        $nombreImagen = 'sin imagen';

        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('empresas')->put($nombreImagen, \File::get($file));
        }        

        $imagen = new Logo_Empresa();
        $imagen->nombre = $nombreImagen;
        $imagen->empresa()->associate($empresa);
        $imagen->save();

        Flash::success('La empresa "'. $empresa->nombre.'"" ha sido registrada de forma existosa.');
        return redirect()->route('admin.empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.empresas.show')->with('empresa', $this->empresa);
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
    public function update(EmpresaRequestEdit $request, $id)
    {
        if ($request->file('imagen'))
        {                  
            $logo_empresa = $this->empresa->logo_empresa;
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();            
            if (Storage::disk('empresas')->exists($logo_empresa->nombre))
             {
                Storage::disk('empresas')->delete($logo_empresa->nombre);   // Borramos la imagen anterior.      
             }
            $logo_empresa->nombre = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            $logo_empresa->save();           
            Storage::disk('empresas')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/empresas   
        }  

        $this->empresa->fill($request->all());
        $this->empresa->save();
        Flash::success("Se ha realizado la actualización del registro: ".$this->empresa->nombre.".");
        return redirect()->route('admin.empresas.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo_empresa = $this->empresa->logo_empresa;
        if ($logo_empresa->nombre != 'sin imagen')
        {            
            Storage::disk('empresas')->delete($logo_empresa->nombre); // Borramos la imagen asociada.
        } 
        $this->empresa->delete();        
        Flash::error("Se ha realizado la eliminación del registro: ".$this->empresa->nombre.".");        
        return redirect()->route('admin.empresas.index');
    }
}
