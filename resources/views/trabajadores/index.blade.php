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
        
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Telefono</th>
<th>Dirección</th>
<th>Código del Trabajador</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($trabajadores as $trabajador)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $trabajador->Nombre}}</td>
        <td>{{ $trabajador->Apellido_Paterno}}</td>
        <td>{{ $trabajador->Apellido_Materno}}</td>
        <td>{{ $trabajador->Telefono}}</td>
        <td>{{ $trabajador->Direccion}}</td>
        <td>{{ $trabajador->Codigo_Trabajador}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/trabajadores/'.$trabajador->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/trabajadores/'.$trabajador->id) }}" style="display:inline">
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
        <a href="{{ url('trabajadores/create')  }}" class="btn btn-success">Agregar Trabajador</a>
        </div>
</br></br>
{{ $trabajadores->links() }}
        </div>
     @endsection