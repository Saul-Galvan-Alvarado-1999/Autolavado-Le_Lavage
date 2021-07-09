<?php

namespace App\Http\Controllers;

use App\Models\Cajeros;
use Illuminate\Http\Request;

class CajerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mi paginator es para que pueda ver datos en mi tabla de 10 en 10 y no se haga muy extenso
        $datos['cajeros'] = Cajeros::paginate(10);
        return view('cajeros.index', $datos);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cajeros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Esto de abajo es para validar los campos
        $campos = [
            'Nombre' => 'required|string|max:50',
            'Apellido_Paterno' => 'required|string|max:50',
            'Apellido_Materno' => 'required|string|max:50',
            'Telefono' => 'required|string|max:50',
            'Direccion' => 'required|string|max:250',
            'Codigo_Cajero' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Cajero = request()->except('_token');

        //nos inserta a la bd
        Cajeros::insert($datos_Cajero);
        
        return redirect('cajeros')->with('Mensaje', 'Cajero agregado de manera éxitosa!!!');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cajeros  $cajeros
     * @return \Illuminate\Http\Response
     */
    public function show(Cajeros $cajeros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cajeros  $cajeros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cajero = Cajeros::findOrFail($id);

        return view('cajeros.edit', compact('cajero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cajeros  $cajeros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Esto de abajo es para validar los campos
         $campos = [
            'Nombre' => 'required|string|max:50',
            'Apellido_Paterno' => 'required|string|max:50',
            'Apellido_Materno' => 'required|string|max:50',
            'Telefono' => 'required|string|max:50',
            'Direccion' => 'required|string|max:250',
            'Codigo_Cajero' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);

        $datos_Cajero = request()->except(['_token', '_method']);
        Cajeros::where('id', '=', $id)->update($datos_Cajero);

//estas 2 lineas de abajo eran para pruebas y son opcionales
        //$cajero = Cajeros::findOrFail($id);
        //return view('cajeros.edit', compact('cajero'));

        return redirect('cajeros')->with('Mensaje', 'Cajero modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cajeros  $cajeros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cajeros::destroy($id);

        return redirect('cajeros')->with('Mensaje', 'Cajero eliminado de manera éxitosa!!!');
    }
}
