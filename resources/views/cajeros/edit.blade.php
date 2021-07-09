@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/cajeros/' .$cajero->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('cajeros.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection