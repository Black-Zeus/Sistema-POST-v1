<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Rut') }}
            {{ Form::text('Rut', $cliente->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RazonSocial') }}
            {{ Form::text('RazonSocial', $cliente->RazonSocial, ['class' => 'form-control' . ($errors->has('RazonSocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('RazonSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreFantasia') }}
            {{ Form::text('NombreFantasia', $cliente->NombreFantasia, ['class' => 'form-control' . ($errors->has('NombreFantasia') ? ' is-invalid' : ''), 'placeholder' => 'Nombrefantasia']) }}
            {!! $errors->first('NombreFantasia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPaises') }}
            {{ Form::text('idPaises', $cliente->idPaises, ['class' => 'form-control' . ($errors->has('idPaises') ? ' is-invalid' : ''), 'placeholder' => 'Idpaises']) }}
            {!! $errors->first('idPaises', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCiudades') }}
            {{ Form::text('idCiudades', $cliente->idCiudades, ['class' => 'form-control' . ($errors->has('idCiudades') ? ' is-invalid' : ''), 'placeholder' => 'Idciudades']) }}
            {!! $errors->first('idCiudades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $cliente->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idClientesTipos') }}
            {{ Form::text('idClientesTipos', $cliente->idClientesTipos, ['class' => 'form-control' . ($errors->has('idClientesTipos') ? ' is-invalid' : ''), 'placeholder' => 'Idclientestipos']) }}
            {!! $errors->first('idClientesTipos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $cliente->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>