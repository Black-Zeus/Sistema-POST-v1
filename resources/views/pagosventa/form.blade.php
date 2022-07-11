<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idVentas') }}
            {{ Form::text('idVentas', $pagosventa->idVentas, ['class' => 'form-control' . ($errors->has('idVentas') ? ' is-invalid' : ''), 'placeholder' => 'Idventas']) }}
            {!! $errors->first('idVentas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMetodosPagos') }}
            {{ Form::text('idMetodosPagos', $pagosventa->idMetodosPagos, ['class' => 'form-control' . ($errors->has('idMetodosPagos') ? ' is-invalid' : ''), 'placeholder' => 'Idmetodospagos']) }}
            {!! $errors->first('idMetodosPagos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CodigoRegistro') }}
            {{ Form::text('CodigoRegistro', $pagosventa->CodigoRegistro, ['class' => 'form-control' . ($errors->has('CodigoRegistro') ? ' is-invalid' : ''), 'placeholder' => 'Codigoregistro']) }}
            {!! $errors->first('CodigoRegistro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TotalVentas') }}
            {{ Form::text('TotalVentas', $pagosventa->TotalVentas, ['class' => 'form-control' . ($errors->has('TotalVentas') ? ' is-invalid' : ''), 'placeholder' => 'Totalventas']) }}
            {!! $errors->first('TotalVentas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoTemporal') }}
            {{ Form::text('MontoTemporal', $pagosventa->MontoTemporal, ['class' => 'form-control' . ($errors->has('MontoTemporal') ? ' is-invalid' : ''), 'placeholder' => 'Montotemporal']) }}
            {!! $errors->first('MontoTemporal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SaldoVentas') }}
            {{ Form::text('SaldoVentas', $pagosventa->SaldoVentas, ['class' => 'form-control' . ($errors->has('SaldoVentas') ? ' is-invalid' : ''), 'placeholder' => 'Saldoventas']) }}
            {!! $errors->first('SaldoVentas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $pagosventa->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>