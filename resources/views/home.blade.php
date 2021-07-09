@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#87CEFA">{{ __('Bienvenido') }}</div>

                <div class="card-body" style="background-color:#DCDCDC">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas en el Sistema de control de el autolavado "Le Lavage", en la parte 
                    superior podras encontrar un menú en el cual se encuentran todas las áreas
                    pertenecientes a este Sistema, en cada una de ellas podras visualizar, crear, modificar y
                     eliminar (tareas básicas) de acuerdo a lo que requieras hacer') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection