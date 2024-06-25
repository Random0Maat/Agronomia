<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coleccion;


class ColeccionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coleccion=Coleccion::all();
        return view ('recursos.coleccion.index')->with('coleccion',$coleccion);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('recursos.coleccion.create');
    }

    /**
     * Store a newly created resource in storage.(id,nombre,apellido,ci,sexo,direccion,idusuario) (NULL, 'Invitado', 'choque', '9985367', 'm', 'av. beni', '1')
                                
     */
    public function store(Request $request)
    {
        $coleccion=new Coleccion;
        
    	$coleccion->nombre=$request->get('nombre');
    	$coleccion->descripcion=$request->get('descripcion');
    	$coleccion->planta="";

        // Verifica si el archivo fue subido
    if($request->hasFile('planta')) {
        // Obtiene el archivo
        $file = $request->file('planta');

        // Obtiene el nombre original del archivo
        $filename = $file->getClientOriginalName();
        $coleccion->planta= $filename;
        // Mueve el archivo a la carpeta deseada
        $destinationPath = 'plantas';
        $file->move($destinationPath, $filename);
        
    }
    
        $coleccion->save();

    	return Redirect::to('coleccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coleccion=Coleccion::findOrFail($id);
       
       
         return view ('recursos.coleccion.show')
         ->with('coleccion',$coleccion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('recursos.coleccion.edit')
        ->with('coleccion',Coleccion::findOrFail($id));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $coleccion=Coleccion::findOrFail($id);
        
    	$coleccion->nombre=$request->get('nombre');
    	$coleccion->descripcion=$request->get('descripcion');
    	
            // Verifica si el archivo fue subido
        if($request->hasFile('planta')) {
            // Obtiene el archivo
            $file = $request->file('planta');

            // Obtiene el nombre original del archivo
            $filename = $file->getClientOriginalName();
            $coleccion->planta= $filename;
            // Mueve el archivo a la carpeta deseada
            $destinationPath = 'plantas';
           $file->move($destinationPath, $filename);
         
            
        }

    	$coleccion->update();
       
    	return Redirect::to('coleccion');

        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coleccion=Coleccion::findOrFail($id);
    	$coleccion->delete();

        
    	return Redirect::to('coleccion');

    }
}
