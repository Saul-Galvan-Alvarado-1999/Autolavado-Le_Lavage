<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mi paginator es para que pueda ver datos en mi tabla de 10 en 10 y no se haga muy extenso
        $datos['servicios'] = Servicios::paginate(10);
        return view('servicios.index', $datos);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
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
            'Nombre_Servicio' => 'required|string|max:50',
            'Costo' => 'required|string|max:50',
            'Codigo_Servicio' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Servicio = request()->except('_token');

        //nos inserta a la bd
        Servicios::insert($datos_Servicio);
        
        return redirect('servicios')->with('Mensaje', 'Servicio agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicios::findOrFail($id);

        return view('servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          //Esto de abajo es para validar los campos
          $campos = [
            'Nombre_Servicio' => 'required|string|max:50',
            'Costo' => 'required|string|max:50',
            'Codigo_Servicio' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Servicio = request()->except('_token', '_method');
        Servicios::where('id', '=', $id)->update($datos_Servicio);
        
        return redirect('servicios')->with('Mensaje', 'Servicio modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicios::destroy($id);

        return redirect('servicios')->with('Mensaje', 'Servicio eliminado de manera éxitosa!!!');
    }
}

