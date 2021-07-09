<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;


class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mi paginator es para que pueda ver datos en mi tabla de 10 en 10 y no se haga muy extenso
        $datos['registros'] = Registros::paginate(10);
        return view('registros.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros.create');
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
            'Fecha' => 'required|date',
            'Hora' => 'required|string',
            'Codigo_Trabajador' => 'required|string|max:6',
            'Codigo_Cajero' => 'required|string|max:6',
            'Codigo_Servicio' => 'required|string|max:6',
            'Codigo_Vehiculo' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Registros = request()->except('_token');

        //nos inserta a la bd
        Registros::insert($datos_Registros);
        
        return redirect('registros')->with('Mensaje', 'Registro agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function show(Registros $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Registros::findOrFail($id); 

        return view('registros.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Esto de abajo es para validar los campos
        $campos = [
            'Fecha' => 'required|date',
            'Hora' => 'required|string',
            'Codigo_Trabajador' => 'required|string|max:6',
            'Codigo_Cajero' => 'required|string|max:6',
            'Codigo_Servicio' => 'required|string|max:6',
            'Codigo_Vehiculo' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Registros = request()->except('_token', '_method');

        //nos modifica a la bd
        Registros::where('id', '=', $id)->update($datos_Registros);
        
        return redirect('registros')->with('Mensaje', 'Registro modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registros::destroy($id);

        return redirect('registros')->with('Mensaje', 'Registro eliminado de manera éxitosa!!!');
    }
}
