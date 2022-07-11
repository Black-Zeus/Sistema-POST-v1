<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $caja->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEmpresas') }}
            {{ Form::text('idEmpresas', $caja->idEmpresas, ['class' => 'form-control' . ($errors->has('idEmpresas') ? ' is-invalid' : ''), 'placeholder' => 'Idempresas']) }}
            {!! $errors->first('idEmpresas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocal') }}
            {{ Form::text('idLocal', $caja->idLocal, ['class' => 'form-control' . ($errors->has('idLocal') ? ' is-invalid' : ''), 'placeholder' => 'Idlocal']) }}
            {!! $errors->first('idLocal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoApertura') }}
            {{ Form::text('MontoApertura', $caja->MontoApertura, ['class' => 'form-control' . ($errors->has('MontoApertura') ? ' is-invalid' : ''), 'placeholder' => 'Montoapertura']) }}
            {!! $errors->first('MontoApertura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoVentas') }}
            {{ Form::text('MontoVentas', $caja->MontoVentas, ['class' => 'form-control' . ($errors->has('MontoVentas') ? ' is-invalid' : ''), 'placeholder' => 'Montoventas']) }}
            {!! $errors->first('MontoVentas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoDevoluciones') }}
            {{ Form::text('MontoDevoluciones', $caja->MontoDevoluciones, ['class' => 'form-control' . ($errors->has('MontoDevoluciones') ? ' is-invalid' : ''), 'placeholder' => 'Montodevoluciones']) }}
            {!! $errors->first('MontoDevoluciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoPerdidas') }}
            {{ Form::text('MontoPerdidas', $caja->MontoPerdidas, ['class' => 'form-control' . ($errors->has('MontoPerdidas') ? ' is-invalid' : ''), 'placeholder' => 'Montoperdidas']) }}
            {!! $errors->first('MontoPerdidas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoAjuste') }}
            {{ Form::text('MontoAjuste', $caja->MontoAjuste, ['class' => 'form-control' . ($errors->has('MontoAjuste') ? ' is-invalid' : ''), 'placeholder' => 'Montoajuste']) }}
            {!! $errors->first('MontoAjuste', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoCajasChicas') }}
            {{ Form::text('MontoCajasChicas', $caja->MontoCajasChicas, ['class' => 'form-control' . ($errors->has('MontoCajasChicas') ? ' is-invalid' : ''), 'placeholder' => 'Montocajaschicas']) }}
            {!! $errors->first('MontoCajasChicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoCierre') }}
            {{ Form::text('MontoCierre', $caja->MontoCierre, ['class' => 'form-control' . ($errors->has('MontoCierre') ? ' is-invalid' : ''), 'placeholder' => 'Montocierre']) }}
            {!! $errors->first('MontoCierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $caja->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>