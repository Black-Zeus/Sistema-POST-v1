<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idTipoListaPrecios') }}
            {{ Form::text('idTipoListaPrecios', $listaprecio->idTipoListaPrecios, ['class' => 'form-control' . ($errors->has('idTipoListaPrecios') ? ' is-invalid' : ''), 'placeholder' => 'Idtipolistaprecios']) }}
            {!! $errors->first('idTipoListaPrecios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $listaprecio->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaInicio') }}
            {{ Form::text('FechaInicio', $listaprecio->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaTermino') }}
            {{ Form::text('FechaTermino', $listaprecio->FechaTermino, ['class' => 'form-control' . ($errors->has('FechaTermino') ? ' is-invalid' : ''), 'placeholder' => 'Fechatermino']) }}
            {!! $errors->first('FechaTermino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $listaprecio->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>