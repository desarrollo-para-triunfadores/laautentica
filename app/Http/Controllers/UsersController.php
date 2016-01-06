<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\PassRequest;
use App\Http\Requests\UserRequestCreate;
use App\Http\Requests\UserRequestEdit;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class UsersController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'actPass', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->usuario = User::find($route->getParameter('usuarios'));  // marcas es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.usuarios.tabla')->with('usuarios',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequestCreate $request)
    {
        $nombreImagen = 'sin imagen';
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('usuarios')->put($nombreImagen, \File::get($file));
        }  

        $user = new User($request->all());
        $user->name = $request->apellido.' '.$request->nombre;
        $user->password = bcrypt($request->password);
        $user->imagen = $nombreImagen;
        $user->save();

        Flash::success("¡Se ha registrado al usuario ".$user->usuario." de forma existosa!");
        return redirect()->route('admin.usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.usuarios.show')->with('usuario',$this->usuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actPass(PassRequest $request, $id)
    {
        $this->usuario->password = bcrypt($request->password);
        $this->usuario->save();
        Flash::success("Se ha realizado la actualización del password.");
        return redirect()->route('admin.usuarios.show', $id);
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
    public function update(UserRequestEdit $request, $id)
    {
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');        
            $nombreImagen = 'laAutentica_' . time() . '.' . $file->getClientOriginalExtension();            
            if (Storage::disk('usuarios')->exists($this->usuario->imagen))
             {
                Storage::disk('usuarios')->delete($this->usuario->imagen);   // Borramos la imagen anterior.      
             }
            $this->usuario->fill($request->all());
            $this->usuario->imagen = $nombreImagen;  // Actualizamos el nombre de la nueva imagen.
            Storage::disk('usuarios')->put($nombreImagen, \File::get($file));  // Movemos la imagen nueva al directorio /imagenes/usuarios   
            $this->usuario->save();
            Flash::success("Se ha realizado la actualización del usuario: ".$this->usuario->name.".");
            return redirect()->route('admin.usuarios.show', $id);            
        }  
        $this->usuario->fill($request->all());
        $this->usuario->save();
        Flash::success("Se ha realizado la actualización del usuario: ".$this->usuario->name.".");
        return redirect()->route('admin.usuarios.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->usuario->imagen != 'sin imagen')
        {            
            Storage::disk('usuarios')->delete($this->usuario->imagen); // Borramos la imagen asociada.
        }
        $this->usuario->delete();
        Flash::error("Se ha realizado la eliminación del usuario: ".$this->usuario->name.".");        
        return redirect()->route('admin.usuarios.index');
    }
}
