<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mi paginator es para que pueda ver datos en mi tabla de 10 en 10 y no se haga muy extenso
        $datos['vehiculos'] = Vehiculos::paginate(10);
        return view('vehiculos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.create');
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
            'Matricula' => 'required|string|max:10',
            'Tipo' => 'required|string|max:50',
            'Marca' => 'required|string|max:50',
            'Modelo' => 'required|string|max:50',
            'Color' => 'required|string|max:250',
            'Codigo_Cliente' => 'required|string|max:6',
            'Codigo_Vehiculo' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Vehiculo = request()->except('_token');

        //nos inserta a la bd
        Vehiculos::insert($datos_Vehiculo);
        
        return redirect('vehiculos')->with('Mensaje', 'Vehiculo agregado de manera éxitosa!!!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculos::findOrFail($id);

        return view('vehiculos.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Esto de abajo es para validar los campos
         $campos = [
            'Matricula' => 'required|string|max:10',
            'Tipo' => 'required|string|max:50',
            'Marca' => 'required|string|max:50',
            'Modelo' => 'required|string|max:50',
            'Color' => 'required|string|max:250',
            'Codigo_Cliente' => 'required|string|max:6',
            'Codigo_Vehiculo' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);

        $datos_Vehiculo = request()->except(['_token', '_method']);
        Vehiculos::where('id', '=', $id)->update($datos_Vehiculo);

        return redirect('vehiculos')->with('Mensaje', 'Vehículo modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiculos::destroy($id);

        return redirect('vehiculos')->with('Mensaje', 'Vehículo eliminado de manera éxitosa!!!');
    }
}
