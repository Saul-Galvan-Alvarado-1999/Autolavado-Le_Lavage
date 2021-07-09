<?php

namespace App\Http\Controllers;

use App\Models\Trabajadores;
use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mi paginator es para que pueda ver datos en mi tabla de 10 en 10 y no se haga muy extenso
        $datos['trabajadores'] = Trabajadores::paginate(10);
        return view('trabajadores.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajadores.create');
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
            'Codigo_Trabajador' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);
        $datos_Trabajador = request()->except('_token');

        //nos inserta a la bd
        Trabajadores::insert($datos_Trabajador);
        
        return redirect('trabajadores')->with('Mensaje', 'Trabajador agregado de manera éxitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabajador = Trabajadores::findOrFail($id);

        return view('trabajadores.edit', compact('trabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trabajadores  $trabajadores
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
            'Codigo_Trabajador' => 'required|string|max:6'
        ];
        $Mensaje = ["required" => 'El :attribute es requerido, favor de llenarlo'];
        $this->validate($request, $campos, $Mensaje);

        $datos_Trabajador = request()->except(['_token', '_method']);
        Trabajadores::where('id', '=', $id)->update($datos_Trabajador);



        return redirect('trabajadores')->with('Mensaje', 'Trabajador modificado de manera éxitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trabajadores::destroy($id);

        return redirect('trabajadores')->with('Mensaje', 'Trabajador eliminado de manera éxitosa!!!');
    }
}
