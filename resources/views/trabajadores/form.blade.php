
<div class="form-group">
<label class="control.label" for="Nombre">{{'Nombre'}}</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':'' }} " 
    type="text" name="Nombre" id="Nombre" 
    value="{{ isset($trabajador->Nombre)?$trabajador->Nombre:old('Nombre') }}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

 <div class="form-group">
    <label class="control.label" for="Apellido_Paterno">{{'Apellido Paterno'}}</label>
    <input class="form-control {{$errors->has('Apellido_Paterno')?'is-invalid':'' }} " type="text" name="Apellido_Paterno" id="Apellido_Paterno" 
    value="{{ isset($trabajador->Apellido_Paterno)?$trabajador->Apellido_Paterno:old('Apellido_Paterno') }}">
    {!! $errors->first('Apellido_Paterno','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Apellido_Materno">{{'Apellido Materno'}}</label>
    <input class="form-control {{$errors->has('Apellido_Materno')?'is-invalid':'' }} " type="text" name="Apellido_Materno" id="Apellido_Materno" 
    value="{{ isset($trabajador->Apellido_Materno)?$trabajador->Apellido_Materno:old('Apellido_Materno') }}">
    {!! $errors->first('Apellido_Materno','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Telefono">{{'Teléfono'}}</label>
    <input class="form-control {{$errors->has('Telefono')?'is-invalid':'' }} " type="text" name="Telefono" id="Telefono" 
    value="{{ isset($trabajador->Telefono)?$trabajador->Telefono:old('Telefono') }}">
    {!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Direccion">{{'Dirección'}}</label>
    <input class="form-control {{$errors->has('Direccion')?'is-invalid':'' }} " type="text" name="Direccion" id="Direccion" 
    value="{{ isset($trabajador->Direccion)?$trabajador->Direccion:old('Direccion') }}">
    {!! $errors->first('Direccion','<div class="invalid-feedback">:message</div>') !!}
    </div>


<div class="form-group">
    <label class="control.label" for="Codigo_Trabajador">{{'Código del Trabajador'}}</label>
    <input class="form-control {{$errors->has('Codigo_Trabajador')?'is-invalid':'' }} " type="text" name="Codigo_Trabajador" id="Codigo_Trabajador" 
    value="{{ isset($trabajador->Codigo_Trabajador)?$trabajador->Codigo_Trabajador:old('Codigo_Trabajador') }}">
    {!! $errors->first('Codigo_Trabajador','<div class="invalid-feedback">:message</div>') !!}
    </div>
<div class="col text-center">
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar Trabajador':'Modificar Trabajador'}}" >

    <a class="btn btn-danger" href="{{ url('trabajadores')  }}">Volver</a>
</div>