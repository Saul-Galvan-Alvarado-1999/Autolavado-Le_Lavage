
<div class="form-group">
<label class="control.label" for="Nombre_Servicio">{{'Nombre del Servicio'}}</label>
    <input class="form-control {{$errors->has('Nombre_Servicio')?'is-invalid':'' }} " 
    type="text" name="Nombre_Servicio" id="Nombre_Servicio" 
    value="{{ isset($servicio->Nombre_Servicio)?$servicio->Nombre_Servicio:old('Nombre_Servicio') }}">

    {!! $errors->first('Nombre_Servicio','<div class="invalid-feedback">:message</div>') !!}
</div>

 <div class="form-group">
    <label class="control.label" for="Costo">{{'Costo del Servicio'}}</label>
    <input class="form-control {{$errors->has('Costo')?'is-invalid':'' }} " 
    type="text" name="Costo" id="Costo" 
    value="{{ isset($servicio->Costo)?$servicio->Costo:old('Costo') }}">
    {!! $errors->first('Costo','<div class="invalid-feedback">:message</div>') !!}
    </div>

<div class="form-group">
    <label class="control.label" for="Codigo_Servicio">{{'Código del Servicio'}}</label>
    <input class="form-control {{$errors->has('Codigo_Servicio')?'is-invalid':'' }} "
     type="text" name="Codigo_Servicio" id="Codigo_Servicio" 
    value="{{ isset($servicio->Codigo_Servicio)?$servicio->Codigo_Servicio:old('Codigo_Servicio') }}">
    {!! $errors->first('Codigo_Servicio','<div class="invalid-feedback">:message</div>') !!}
    </div>
<div class="col text-center">
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar Servicio':'Modificar Servicio'}}" >

    <a class="btn btn-danger" href="{{ url('servicios')  }}">Volver</a>
</div>