@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/trabajadores/' .$trabajador->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('trabajadores.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection