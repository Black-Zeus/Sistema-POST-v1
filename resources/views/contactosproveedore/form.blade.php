<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idProveedor') }}
            {{ Form::text('idProveedor', $contactosproveedore->idProveedor, ['class' => 'form-control' . ($errors->has('idProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Idproveedor']) }}
            {!! $errors->first('idProveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEncargados') }}
            {{ Form::text('idEncargados', $contactosproveedore->idEncargados, ['class' => 'form-control' . ($errors->has('idEncargados') ? ' is-invalid' : ''), 'placeholder' => 'Idencargados']) }}
            {!! $errors->first('idEncargados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $contactosproveedore->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPaises') }}
            {{ Form::text('idPaises', $contactosproveedore->idPaises, ['class' => 'form-control' . ($errors->has('idPaises') ? ' is-invalid' : ''), 'placeholder' => 'Idpaises']) }}
            {!! $errors->first('idPaises', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCiudades') }}
            {{ Form::text('idCiudades', $contactosproveedore->idCiudades, ['class' => 'form-control' . ($errors->has('idCiudades') ? ' is-invalid' : ''), 'placeholder' => 'Idciudades']) }}
            {!! $errors->first('idCiudades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $contactosproveedore->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $contactosproveedore->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fono') }}
            {{ Form::text('Fono', $contactosproveedore->Fono, ['class' => 'form-control' . ($errors->has('Fono') ? ' is-invalid' : ''), 'placeholder' => 'Fono']) }}
            {!! $errors->first('Fono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anexo') }}
            {{ Form::text('Anexo', $contactosproveedore->Anexo, ['class' => 'form-control' . ($errors->has('Anexo') ? ' is-invalid' : ''), 'placeholder' => 'Anexo']) }}
            {!! $errors->first('Anexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $contactosproveedore->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>