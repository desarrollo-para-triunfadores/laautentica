<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Marca;
use App\Localidad;
use App\Logo_Producto;
use App\Tipoproducto;
use Laracasts\Flash\Flash;
use App\Http\Requests\ProductoRequestCreate;
use App\Http\Requests\ProductoRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;


class ProductosController extends Controller
{
     public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->producto = Producto::find($route->getParameter('productos'));  // productos es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Producto::searchNombres($request->nombre)
        ->searchMarcas($request->idmarca)
        ->searchEstado($request->estado)
        ->searchTipo($request->idtipo)
        ->searchOrigen($request->idorigen)
        ->orderBy('nombre','ASC')
        ->paginate();
    
        if($request->ajax()){ //Si la solicitud fue realizada utilizando ajax se devuelven los registros únicamente a la tabla.
            return response()->json(view('admin.productos.tablaLogos',compact('productos'))->render());
        }
        return view('admin.productos.index')            
            ->with('productos',$productos);
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
    public function store(ProductoRequestCreate $request)
    {        
        $producto = new Producto($request->all());
        $producto->save();

        //Manipulación de Imágenes...
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('productos')->put($nombreImagen, \File::get($file));
        }        

        $imagen = new Logo_Producto();
        $imagen->nombre = $nombreImagen;
        $imagen->producto()->associate($producto);
        $imagen->save();
        Flash::success('El producto "'. $producto->nombre .'"" ha sido registrado de forma existosa.');
        return redirect()->route('admin.productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $marcas = Marca::orderBy('nombre','ASC')->lists('nombre','id');
        $localidades = Localidad::orderBy('nombre','ASC')->lists('nombre','id');
        $tipos = Tipoproducto::orderBy('nombreTipo','ASC')->lists('nombreTipo','id');
        return view('admin.productos.show')
            ->with('marcas',$marcas)
            ->with('localidades', $localidades)
            ->with('tipos', $tipos)
            ->with('producto',$this->producto);
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
    public function update(ProductoRequestEdit $request, $id)
    {
        if ($request->file('imagen'))
        {                 
            $logo_producto = $this->producto->logo_producto;
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();            
            if (Storage::disk('productos')->exists($logo_producto->nombre))
             {
                Storage::disk('productos')->delete($logo_producto->nombre);   // Borramos la imagen anterior.      
             }
            $logo_producto->nombre = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            $logo_producto->save();           
            Storage::disk('productos')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/productos   
        }  
        $this->producto->fill($request->all());
        if ($request->estado == null)
        {
            $this->producto->estado = 0;
        } 
        $this->producto->save();     
        Flash::success("Se ha realizado la actualización del registro: ".$this->producto->nombre.".");
        return redirect()->route('admin.productos.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo_producto = $this->producto->logo_producto;
        if ($logo_producto->nombre != 'sin imagen')
        {            
            Storage::disk('productos')->delete($logo_producto->nombre); // Borramos la imagen asociada.
        } 
        $this->producto->delete();        
        Flash::error("Se ha realizado la eliminación del registro: ".$this->producto->nombre.".");        
        return redirect()->route('admin.productos.index');
    }
}
