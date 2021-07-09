
<div class="form-group">
<label class="control.label" for="Matricula">{{'Matricula'}}</label>
    <input class="form-control {{$errors->has('Matricula')?'is-invalid':'' }} " 
    type="text" name="Matricula" id="Matricula" 
    value="{{ isset($vehiculo->Matricula)?$vehiculo->Matricula:old('Matricula') }}">

    {!! $errors->first('Matricula','<div class="invalid-feedback">:message</div>') !!}
</div>

 <div class="form-group">
    <label class="control.label" for="Tipo">{{'Tipo'}}</label>
    <input class="form-control {{$errors->has('Tipo')?'is-invalid':'' }} " type="text" name="Tipo" id="Tipo" 
    value="{{ isset($vehiculo->Tipo)?$vehiculo->Tipo:old('Tipo') }}">
    {!! $errors->first('Tipo','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Marca">{{'Marca'}}</label>
    <input class="form-control {{$errors->has('Marca')?'is-invalid':'' }} " type="text" name="Marca" id="Marca" 
    value="{{ isset($vehiculo->Marca)?$vehiculo->Marca:old('Marca') }}">
    {!! $errors->first('Marca','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Modelo">{{'Modelo'}}</label>
    <input class="form-control {{$errors->has('Modelo')?'is-invalid':'' }} " type="text" name="Modelo" id="Modelo" 
    value="{{ isset($vehiculo->Modelo)?$vehiculo->Modelo:old('Modelo') }}">
    {!! $errors->first('Modelo','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Color">{{'Color'}}</label>
    <input class="form-control {{$errors->has('Color')?'is-invalid':'' }} " type="text" name="Color" id="Color" 
    value="{{ isset($vehiculo->Color)?$vehiculo->Color:old('Color') }}">
    {!! $errors->first('Color','<div class="invalid-feedback">:message</div>') !!}
    </div>


<div class="form-group">
    <label class="control.label" for="Codigo_Cliente">{{'Código del Cliente'}}</label>
    <input class="form-control {{$errors->has('Codigo_Cliente')?'is-invalid':'' }} " type="text" name="Codigo_Cliente" id="Codigo_Cliente" 
    value="{{ isset($vehiculo->Codigo_Cliente)?$vehiculo->Codigo_Cliente:old('Codigo_Cliente') }}">
    {!! $errors->first('Codigo_Cliente','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
    <label class="control.label" for="Codigo_Vehiculo">{{'Código del Vehiculo'}}</label>
    <input class="form-control {{$errors->has('Codigo_Vehiculo')?'is-invalid':'' }} " type="text" name="Codigo_Vehiculo" id="Codigo_Vehiculo" 
    value="{{ isset($vehiculo->Codigo_Vehiculo)?$vehiculo->Codigo_Vehiculo:old('Codigo_Vehiculo') }}">
    {!! $errors->first('Codigo_Vehiculo','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="col text-center">
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar Vehículo':'Modificar Vehículo'}}" >

    <a class="btn btn-danger" href="{{ url('vehiculos')  }}">Volver</a>
</div>