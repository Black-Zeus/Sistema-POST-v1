<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codDocumento') }}
            {{ Form::text('codDocumento', $tipodocumento->codDocumento, ['class' => 'form-control' . ($errors->has('codDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Coddocumento']) }}
            {!! $errors->first('codDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $tipodocumento->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $tipodocumento->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modulo') }}
            {{ Form::text('Modulo', $tipodocumento->Modulo, ['class' => 'form-control' . ($errors->has('Modulo') ? ' is-invalid' : ''), 'placeholder' => 'Modulo']) }}
            {!! $errors->first('Modulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EsDTE') }}
            {{ Form::text('EsDTE', $tipodocumento->EsDTE, ['class' => 'form-control' . ($errors->has('EsDTE') ? ' is-invalid' : ''), 'placeholder' => 'Esdte']) }}
            {!! $errors->first('EsDTE', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>