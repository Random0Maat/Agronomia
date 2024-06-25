<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coleccion;


class PlantaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view ('recursos.planta.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    
        $coleccion->save();

    	return Redirect::to('coleccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $especie)
    {
       
       //https://es.wikipedia.org/w/api.php?action=query&list=search&srprop=snippet&format=json&origin=*&utf8=&srsearch=$nombre

      

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://es.wikipedia.org/w/api.php?action=query&list=search&srprop=snippet&format=json&origin=*&utf8=&srsearch=".urlencode($especie));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resultado = curl_exec($ch);
        curl_close($ch);
        $datos = json_decode($resultado, true);

        $articulo=$datos['query']['search'][0]['snippet'];

        $descripcion = preg_replace('/<span[^>]*>.*?<\/span>/', '', $articulo);
       
         return view ('recursos.planta.show')
         ->with('especie',$especie)
         ->with('descripcion',$descripcion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
