<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('FactorImpuesto') }}
            {{ Form::text('FactorImpuesto', $impuesto->FactorImpuesto, ['class' => 'form-control' . ($errors->has('FactorImpuesto') ? ' is-invalid' : ''), 'placeholder' => 'Factorimpuesto']) }}
            {!! $errors->first('FactorImpuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $impuesto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EsExento') }}
            {{ Form::text('EsExento', $impuesto->EsExento, ['class' => 'form-control' . ($errors->has('EsExento') ? ' is-invalid' : ''), 'placeholder' => 'Esexento']) }}
            {!! $errors->first('EsExento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $impuesto->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>