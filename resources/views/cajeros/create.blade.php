@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
@foreach($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="{{ url('/cajeros')}}" class="form-horizontal">
{{csrf_field() }}
@include('cajeros.form', ['Modo'=>'crear'])

</form>

 </div>
     @endsection