<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $cajaschica->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEmpresas') }}
            {{ Form::text('idEmpresas', $cajaschica->idEmpresas, ['class' => 'form-control' . ($errors->has('idEmpresas') ? ' is-invalid' : ''), 'placeholder' => 'Idempresas']) }}
            {!! $errors->first('idEmpresas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocal') }}
            {{ Form::text('idLocal', $cajaschica->idLocal, ['class' => 'form-control' . ($errors->has('idLocal') ? ' is-invalid' : ''), 'placeholder' => 'Idlocal']) }}
            {!! $errors->first('idLocal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoEfectivo') }}
            {{ Form::text('MontoEfectivo', $cajaschica->MontoEfectivo, ['class' => 'form-control' . ($errors->has('MontoEfectivo') ? ' is-invalid' : ''), 'placeholder' => 'Montoefectivo']) }}
            {!! $errors->first('MontoEfectivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $cajaschica->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>