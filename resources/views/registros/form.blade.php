
<div class="form-group">
<label class="control.label" for="Fecha">{{'Fecha'}}</label>
    <input class="form-control {{$errors->has('Fecha')?'is-invalid':'' }} " 
    type="date" name="Fecha" id="Fecha" 
    value="{{ isset($registro->Fecha)?$registro->Fecha:old('Fecha') }}">

    {!! $errors->first('Fecha','<div class="invalid-feedback">:message</div>') !!}
</div>

 <div class="form-group">
    <label class="control.label" for="Hora">{{'Hora'}}</label>
    <input class="form-control {{$errors->has('Hora')?'is-invalid':'' }} " type="time" name="Hora" id="Hora" 
    value="{{ isset($registro->Hora)?$registro->Hora:old('Hora') }}">
    {!! $errors->first('Hora','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Codigo_Trabajador">{{'Código del Trabajador'}}</label>
    <input class="form-control {{$errors->has('Codigo_Trabajador')?'is-invalid':'' }} " type="text" name="Codigo_Trabajador" id="Codigo_Trabajador" 
    value="{{ isset($registro->Codigo_Trabajador)?$registro->Codigo_Trabajador:old('Codigo_Trabajador') }}">
    {!! $errors->first('Codigo_Trabajador','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Codigo_Cajero">{{'Código del Cajero'}}</label>
    <input class="form-control {{$errors->has('Codigo_Cajero')?'is-invalid':'' }} " type="text" name="Codigo_Cajero" id="Codigo_Cajero" 
    value="{{ isset($registro->Codigo_Cajero)?$registro->Codigo_Cajero:old('Codigo_Cajero') }}">
    {!! $errors->first('Codigo_Cajero','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Codigo_Servicio">{{'Código del Servicio'}}</label>
    <input class="form-control {{$errors->has('Codigo_Servicio')?'is-invalid':'' }} " type="text" name="Codigo_Servicio" id="Codigo_Servicio" 
    value="{{ isset($registro->Codigo_Servicio)?$registro->Codigo_Servicio:old('Codigo_Servicio') }}">
    {!! $errors->first('Codigo_Servicio','<div class="invalid-feedback">:message</div>') !!}
    </div>


<div class="form-group">
    <label class="control.label" for="Codigo_Vehiculo">{{'Código del Vehículo'}}</label>
    <input class="form-control {{$errors->has('Codigo_Vehiculo')?'is-invalid':'' }} " type="text" name="Codigo_Vehiculo" id="Codigo_Vehiculo" 
    value="{{ isset($registro->Codigo_Vehiculo)?$registro->Codigo_Vehiculo:old('Codigo_Vehiculo') }}">
    {!! $errors->first('Codigo_Vehiculo','<div class="invalid-feedback">:message</div>') !!}
    </div>
<div class="col text-center">
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar registro':'Modificar Registro'}}" >

    <a class="btn btn-danger" href="{{ url('registros')  }}">Volver</a>
</div>