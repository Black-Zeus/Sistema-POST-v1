<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEmpresas') }}
            {{ Form::text('idEmpresas', $lote->idEmpresas, ['class' => 'form-control' . ($errors->has('idEmpresas') ? ' is-invalid' : ''), 'placeholder' => 'Idempresas']) }}
            {!! $errors->first('idEmpresas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idSubProducto') }}
            {{ Form::text('idSubProducto', $lote->idSubProducto, ['class' => 'form-control' . ($errors->has('idSubProducto') ? ' is-invalid' : ''), 'placeholder' => 'Idsubproducto']) }}
            {!! $errors->first('idSubProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ean') }}
            {{ Form::text('Ean', $lote->Ean, ['class' => 'form-control' . ($errors->has('Ean') ? ' is-invalid' : ''), 'placeholder' => 'Ean']) }}
            {!! $errors->first('Ean', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock') }}
            {{ Form::text('Stock', $lote->Stock, ['class' => 'form-control' . ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('StockCritico') }}
            {{ Form::text('StockCritico', $lote->StockCritico, ['class' => 'form-control' . ($errors->has('StockCritico') ? ' is-invalid' : ''), 'placeholder' => 'Stockcritico']) }}
            {!! $errors->first('StockCritico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('StockComprometido') }}
            {{ Form::text('StockComprometido', $lote->StockComprometido, ['class' => 'form-control' . ($errors->has('StockComprometido') ? ' is-invalid' : ''), 'placeholder' => 'Stockcomprometido']) }}
            {!! $errors->first('StockComprometido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocal') }}
            {{ Form::text('idLocal', $lote->idLocal, ['class' => 'form-control' . ($errors->has('idLocal') ? ' is-invalid' : ''), 'placeholder' => 'Idlocal']) }}
            {!! $errors->first('idLocal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $lote->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>