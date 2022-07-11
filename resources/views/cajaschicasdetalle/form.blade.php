<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idCajasChicas') }}
            {{ Form::text('idCajasChicas', $cajaschicasdetalle->idCajasChicas, ['class' => 'form-control' . ($errors->has('idCajasChicas') ? ' is-invalid' : ''), 'placeholder' => 'Idcajaschicas']) }}
            {!! $errors->first('idCajasChicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idAccionesCajasChicas') }}
            {{ Form::text('idAccionesCajasChicas', $cajaschicasdetalle->idAccionesCajasChicas, ['class' => 'form-control' . ($errors->has('idAccionesCajasChicas') ? ' is-invalid' : ''), 'placeholder' => 'Idaccionescajaschicas']) }}
            {!! $errors->first('idAccionesCajasChicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoCajasChicas') }}
            {{ Form::text('idTipoCajasChicas', $cajaschicasdetalle->idTipoCajasChicas, ['class' => 'form-control' . ($errors->has('idTipoCajasChicas') ? ' is-invalid' : ''), 'placeholder' => 'Idtipocajaschicas']) }}
            {!! $errors->first('idTipoCajasChicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoMovimientosCajas') }}
            {{ Form::text('idTipoMovimientosCajas', $cajaschicasdetalle->idTipoMovimientosCajas, ['class' => 'form-control' . ($errors->has('idTipoMovimientosCajas') ? ' is-invalid' : ''), 'placeholder' => 'Idtipomovimientoscajas']) }}
            {!! $errors->first('idTipoMovimientosCajas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $cajaschicasdetalle->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            {{ Form::text('Monto', $cajaschicasdetalle->Monto, ['class' => 'form-control' . ($errors->has('Monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('Monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $cajaschicasdetalle->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocal') }}
            {{ Form::text('idLocal', $cajaschicasdetalle->idLocal, ['class' => 'form-control' . ($errors->has('idLocal') ? ' is-invalid' : ''), 'placeholder' => 'Idlocal']) }}
            {!! $errors->first('idLocal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $cajaschicasdetalle->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>