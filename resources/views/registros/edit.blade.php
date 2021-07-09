@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/registros/' .$registro->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('registros.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection