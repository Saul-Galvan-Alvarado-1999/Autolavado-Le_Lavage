
<div class="form-group">
<label class="control.label" for="Nombre">{{'Nombre'}}</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':'' }} " 
    type="text" name="Nombre" id="Nombre" 
    value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre') }}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

 <div class="form-group">
    <label class="control.label" for="Apellido_Paterno">{{'Apellido Paterno'}}</label>
    <input class="form-control {{$errors->has('Apellido_Paterno')?'is-invalid':'' }} " type="text" name="Apellido_Paterno" id="Apellido_Paterno" 
    value="{{ isset($cliente->Apellido_Paterno)?$cliente->Apellido_Paterno:old('Apellido_Paterno') }}">
    {!! $errors->first('Apellido_Paterno','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Apellido_Materno">{{'Apellido Materno'}}</label>
    <input class="form-control {{$errors->has('Apellido_Materno')?'is-invalid':'' }} " type="text" name="Apellido_Materno" id="Apellido_Materno" 
    value="{{ isset($cliente->Apellido_Materno)?$cliente->Apellido_Materno:old('Apellido_Materno') }}">
    {!! $errors->first('Apellido_Materno','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Telefono">{{'Teléfono'}}</label>
    <input class="form-control {{$errors->has('Telefono')?'is-invalid':'' }} " type="text" name="Telefono" id="Telefono" 
    value="{{ isset($cliente->Telefono)?$cliente->Telefono:old('Telefono') }}">
    {!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Tipo">{{'Tipo'}}</label>
    <input class="form-control {{$errors->has('Tipo')?'is-invalid':'' }} " type="text" name="Tipo" id="Tipo" 
    value="{{ isset($cliente->Tipo)?$cliente->Tipo:old('Tipo') }}">
    {!! $errors->first('Tipo','<div class="invalid-feedback">:message</div>') !!}
    </div>


<div class="form-group">
    <label class="control.label" for="Codigo_Cliente">{{'Código del cliente'}}</label>
    <input class="form-control {{$errors->has('Codigo_Cliente')?'is-invalid':'' }} "
     type="text" name="Codigo_Cliente" id="Codigo_Cliente" 
    value="{{ isset($cliente->Codigo_Cliente)?$cliente->Codigo_Cliente:old('Codigo_Cliente') }}">
    {!! $errors->first('Codigo_Cliente','<div class="invalid-feedback">:message</div>') !!}
    </div>
<div class="col text-center">
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar cliente':'Modificar cliente'}}" >

    <a class="btn btn-danger" href="{{ url('clientes')  }}">Volver</a>
</div>