@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/vehiculos/' .$vehiculo->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('vehiculos.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection