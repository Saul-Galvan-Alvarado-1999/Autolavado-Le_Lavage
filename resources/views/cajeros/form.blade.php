
<div class="form-group">
<label class="control.label" for="Nombre">{{'Nombre'}}</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':'' }} " 
    type="text" name="Nombre" id="Nombre" 
    value="{{ isset($cajero->Nombre)?$cajero->Nombre:old('Nombre') }}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

 <div class="form-group">
    <label class="control.label" for="Apellido_Paterno">{{'Apellido Paterno'}}</label>
    <input class="form-control {{$errors->has('Apellido_Paterno')?'is-invalid':'' }} " type="text" name="Apellido_Paterno" id="Apellido_Paterno" 
    value="{{ isset($cajero->Apellido_Paterno)?$cajero->Apellido_Paterno:old('Apellido_Paterno') }}">
    {!! $errors->first('Apellido_Paterno','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Apellido_Materno">{{'Apellido Materno'}}</label>
    <input class="form-control {{$errors->has('Apellido_Materno')?'is-invalid':'' }} " type="text" name="Apellido_Materno" id="Apellido_Materno" 
    value="{{ isset($cajero->Apellido_Materno)?$cajero->Apellido_Materno:old('Apellido_Materno') }}">
    {!! $errors->first('Apellido_Materno','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Telefono">{{'Teléfono'}}</label>
    <input class="form-control {{$errors->has('Telefono')?'is-invalid':'' }} " type="text" name="Telefono" id="Telefono" 
    value="{{ isset($cajero->Telefono)?$cajero->Telefono:old('Telefono') }}">
    {!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Direccion">{{'Dirección'}}</label>
    <input class="form-control {{$errors->has('Direccion')?'is-invalid':'' }} " type="text" name="Direccion" id="Direccion" 
    value="{{ isset($cajero->Direccion)?$cajero->Direccion:old('Direccion') }}">
    {!! $errors->first('Direccion','<div class="invalid-feedback">:message</div>') !!}
    </div>


<div class="form-group">
    <label class="control.label" for="Codigo_Cajero">{{'Código del cajero'}}</label>
    <input class="form-control {{$errors->has('Codigo_Cajero')?'is-invalid':'' }} " type="text" name="Codigo_Cajero" id="Codigo_Cajero" 
    value="{{ isset($cajero->Codigo_Cajero)?$cajero->Codigo_Cajero:old('Codigo_Cajero') }}">
    {!! $errors->first('Codigo_Cajero','<div class="invalid-feedback">:message</div>') !!}
    </div>
<div class="col text-center">
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar Cajero':'Modificar Cajero'}}" >

    <a class="btn btn-danger" href="{{ url('cajeros')  }}">Volver</a>
</div>