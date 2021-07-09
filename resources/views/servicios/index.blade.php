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
        
<th>Nombre del Servicio</th>
<th>Costo del Servicio</th>
<th>Código del Servicio</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($servicios as $servicio)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $servicio->Nombre_Servicio}}</td>
        <td>{{ $servicio->Costo}}</td>
        <td>{{ $servicio->Codigo_Servicio}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/servicios/'.$servicio->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/servicios/'.$servicio->id) }}" style="display:inline">
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
        <a href="{{ url('servicios/create')  }}" class="btn btn-success">Agregar Servicio</a>
        </div>
</br></br>
{{ $servicios->links() }}
        </div>
     @endsection