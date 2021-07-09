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
        
<th>Matricula</th>
<th>Tipo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
<th>Código del Cliente</th>
<th>Código del Vehículo</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculo)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $vehiculo->Matricula}}</td>
        <td>{{ $vehiculo->Tipo}}</td>
        <td>{{ $vehiculo->Marca}}</td>
        <td>{{ $vehiculo->Modelo}}</td>
        <td>{{ $vehiculo->Color}}</td>
        <td>{{ $vehiculo->Codigo_Cliente}}</td>
        <td>{{ $vehiculo->Codigo_Vehiculo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/vehiculos/'.$vehiculo->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/vehiculos/'.$vehiculo->id) }}" style="display:inline">
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
        <a href="{{ url('vehiculos/create')  }}" class="btn btn-success">Agregar Vehículo</a>
        </div>
</br></br>
{{ $vehiculos->links() }}
        </div>
     @endsection