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
<th>Código del Cajero</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($cajeros as $cajero)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $cajero->Nombre}}</td>
        <td>{{ $cajero->Apellido_Paterno}}</td>
        <td>{{ $cajero->Apellido_Materno}}</td>
        <td>{{ $cajero->Telefono}}</td>
        <td>{{ $cajero->Direccion}}</td>
        <td>{{ $cajero->Codigo_Cajero}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/cajeros/'.$cajero->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/cajeros/'.$cajero->id) }}" style="display:inline">
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
        <a href="{{ url('cajeros/create')  }}" class="btn btn-success">Agregar Cajero</a>
        </div>
</br></br>
{{ $cajeros->links() }}
        </div>
     @endsection