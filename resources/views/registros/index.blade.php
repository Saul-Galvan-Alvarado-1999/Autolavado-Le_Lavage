@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
    
    <div class="alert-info" role="alert">
    {{Session::get('Mensaje')
}}
</div>
@endif

<br>

    <table class="table table-dark table-hover">
        <thead class="thead-dark">
        <tr> 
        <th>Número</th>
        
<th>Fecha</th>
<th>Hora</th>
<th>Código del Trabajador</th>
<th>Código del Cajero</th>
<th>Código del Servicio</th>
<th>Código del Vehículo</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($registros as $registro)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $registro->Fecha}}</td>
        <td>{{ $registro->Hora}}</td>
        <td>{{ $registro->Codigo_Trabajador}}</td>
        <td>{{ $registro->Codigo_Cajero}}</td>
        <td>{{ $registro->Codigo_Servicio}}</td>
        <td>{{ $registro->Codigo_Vehiculo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/registros/'.$registro->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/registros/'.$registro->id) }}" style="display:inline">
        {{csrf_field() }}
        {{ method_field('Delete') }}
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Decea eliminar datos?');">Eliminar</button>
        </form>

        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </br>
        <div class="col text-center">
        <a href="{{ url('registros/create')  }}" class="btn btn-success">Agregar Registro</a>
        </div>
</br></br>
{{ $registros->links() }}
        </div>
     @endsection