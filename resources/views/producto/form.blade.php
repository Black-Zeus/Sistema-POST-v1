<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEmpresas') }}
            {{ Form::text('idEmpresas', $producto->idEmpresas, ['class' => 'form-control' . ($errors->has('idEmpresas') ? ' is-invalid' : ''), 'placeholder' => 'Idempresas']) }}
            {!! $errors->first('idEmpresas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $producto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idFamilias') }}
            {{ Form::text('idFamilias', $producto->idFamilias, ['class' => 'form-control' . ($errors->has('idFamilias') ? ' is-invalid' : ''), 'placeholder' => 'Idfamilias']) }}
            {!! $errors->first('idFamilias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $producto->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('StockCritico') }}
            {{ Form::text('StockCritico', $producto->StockCritico, ['class' => 'form-control' . ($errors->has('StockCritico') ? ' is-invalid' : ''), 'placeholder' => 'Stockcritico']) }}
            {!! $errors->first('StockCritico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('StockComprometido') }}
            {{ Form::text('StockComprometido', $producto->StockComprometido, ['class' => 'form-control' . ($errors->has('StockComprometido') ? ' is-invalid' : ''), 'placeholder' => 'Stockcomprometido']) }}
            {!! $errors->first('StockComprometido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idImpuestos') }}
            {{ Form::text('idImpuestos', $producto->idImpuestos, ['class' => 'form-control' . ($errors->has('idImpuestos') ? ' is-invalid' : ''), 'placeholder' => 'Idimpuestos']) }}
            {!! $errors->first('idImpuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>