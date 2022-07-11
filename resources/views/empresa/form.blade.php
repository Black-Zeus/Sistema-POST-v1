<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $empresa->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPaises') }}
            {{ Form::text('idPaises', $empresa->idPaises, ['class' => 'form-control' . ($errors->has('idPaises') ? ' is-invalid' : ''), 'placeholder' => 'Idpaises']) }}
            {!! $errors->first('idPaises', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCiudades') }}
            {{ Form::text('idCiudades', $empresa->idCiudades, ['class' => 'form-control' . ($errors->has('idCiudades') ? ' is-invalid' : ''), 'placeholder' => 'Idciudades']) }}
            {!! $errors->first('idCiudades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $empresa->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $empresa->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fono') }}
            {{ Form::text('Fono', $empresa->Fono, ['class' => 'form-control' . ($errors->has('Fono') ? ' is-invalid' : ''), 'placeholder' => 'Fono']) }}
            {!! $errors->first('Fono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anexo') }}
            {{ Form::text('Anexo', $empresa->Anexo, ['class' => 'form-control' . ($errors->has('Anexo') ? ' is-invalid' : ''), 'placeholder' => 'Anexo']) }}
            {!! $errors->first('Anexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEncargados') }}
            {{ Form::text('idEncargados', $empresa->idEncargados, ['class' => 'form-control' . ($errors->has('idEncargados') ? ' is-invalid' : ''), 'placeholder' => 'Idencargados']) }}
            {!! $errors->first('idEncargados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $empresa->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>