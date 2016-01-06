<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Empresa;
use App\Logo_Marca;
use Laracasts\Flash\Flash;
use App\Http\Requests\MarcaRequestCreate;
use App\Http\Requests\MarcaRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class MarcasController extends Controller
{

    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->marca = Marca::find($route->getParameter('marcas'));  // marcas es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Mostrar una lista de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $marcas = Marca::searchNombres($request->name)->orderBy('nombre','ASC')->paginate(12); //Retorno todos los registros de marcas según las especificaciones dadas a la variable recien creada.
        $empresas = Empresa::orderBy('nombre','ASC')->lists('nombre','id');
        if($request->ajax()){ //Si la solicitud fue realizada utilizando ajax se devuelven los registros únicamente a la tabla.
            return response()->json(view('admin.marcas.tabla',compact('marcas'))->render());
        }
        return view('admin.marcas.index')
            ->with('empresas',$empresas)
            ->with('marcas',$marcas); //Retorno al cliente la vista asociada al método con la colección de registros necesesarios.
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.create');
    }

    /**
     * Guardo un recurso recién creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaRequestCreate $request)
    {        
             
        //Creación de los registro de Marca.

        $marca = new Marca($request->all()); // Guardamos los valores cargados en la vista en una variable de tipo marca.
        $marca->save(); //se almacena en la base de datos.

        //Manipulación del Logo...

        $nombreImagen = 'sin imagen'; 

        if ($request->file('imagen'))  // Compruebo si recibo un archivo de imagen como parámetro.
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension(); // Le damos un nombre por defecto: la primera parte es laAutentica, después el momento justo de la transacción y por último la extensión de la imagen.          
            Storage::disk('marcas')->put($nombreImagen, \File::get($file));
        } 

        //Creación y asociación del registro de Logo con su respectiva Marca.

        $imagen = new Logo_Marca();
        $imagen->nombre = $nombreImagen;
        $imagen->marca()->associate($marca);
        $imagen->save();


        Flash::success('La marca "'. $marca->nombre.'"" ha sido registrada de forma existosa.');
        return redirect()->route('admin.marcas.index');
    }

    /**
     * Visualizar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $empresas = Empresa::orderBy('nombre','ASC')->lists('nombre','id');       
        return view('admin.marcas.show')
            ->with('marca', $this->marca)
            ->with('empresas',$empresas);
    }

    /**
     * Mostrar el formulario para editar el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaRequestEdit $request, $id)
    {       
        if ($request->file('imagen'))
        {                  
            $logo_Marca = $this->marca->logo_marca;
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();            
            if (Storage::disk('marcas')->exists($logo_Marca->nombre))
             {
                Storage::disk('marcas')->delete($logo_Marca->nombre);   // Borramos la imagen anterior.      
             }
            $logo_Marca->nombre = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            $logo_Marca->save();           
            Storage::disk('marcas')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/marcas   
        }  

        $this->marca->fill($request->all());

        if ($request->estado == null)
        {
            $this->marca->estado = 0;
        } 
        $this->marca->save();
        Flash::success("Se ha realizado la actualización del registro: ".$this->marca->nombre.".");
        return redirect()->route('admin.marcas.show', $id);
    }

    /**
     * Eliminar el recurso especificado de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo_Marca = $this->marca->logo_marca;
        if ($logo_Marca->nombre != 'sin imagen')
        {            
            Storage::disk('marcas')->delete($logo_Marca->nombre); // Borramos la imagen asociada.
        }       
        $this->marca->delete(); // Borramos el registro.
        Flash::error("Se ha realizado la eliminación del registro: ".$this->marca->nombre.".");
        return redirect()->route('admin.marcas.index');
    }
}