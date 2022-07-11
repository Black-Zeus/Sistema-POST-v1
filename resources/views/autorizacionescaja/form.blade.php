<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $autorizacionescaja->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCajasChicasDetalles') }}
            {{ Form::text('idCajasChicasDetalles', $autorizacionescaja->idCajasChicasDetalles, ['class' => 'form-control' . ($errors->has('idCajasChicasDetalles') ? ' is-invalid' : ''), 'placeholder' => 'Idcajaschicasdetalles']) }}
            {!! $errors->first('idCajasChicasDetalles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $autorizacionescaja->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoMovimientosCajas') }}
            {{ Form::text('idTipoMovimientosCajas', $autorizacionescaja->idTipoMovimientosCajas, ['class' => 'form-control' . ($errors->has('idTipoMovimientosCajas') ? ' is-invalid' : ''), 'placeholder' => 'Idtipomovimientoscajas']) }}
            {!! $errors->first('idTipoMovimientosCajas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $autorizacionescaja->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>