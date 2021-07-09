@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/servicios/' .$servicio->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('servicios.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection