<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idMovimientos') }}
            {{ Form::text('idMovimientos', $movimientosdetalle->idMovimientos, ['class' => 'form-control' . ($errors->has('idMovimientos') ? ' is-invalid' : ''), 'placeholder' => 'Idmovimientos']) }}
            {!! $errors->first('idMovimientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLotes') }}
            {{ Form::text('idLotes', $movimientosdetalle->idLotes, ['class' => 'form-control' . ($errors->has('idLotes') ? ' is-invalid' : ''), 'placeholder' => 'Idlotes']) }}
            {!! $errors->first('idLotes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ean') }}
            {{ Form::text('Ean', $movimientosdetalle->Ean, ['class' => 'form-control' . ($errors->has('Ean') ? ' is-invalid' : ''), 'placeholder' => 'Ean']) }}
            {!! $errors->first('Ean', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idProductos') }}
            {{ Form::text('idProductos', $movimientosdetalle->idProductos, ['class' => 'form-control' . ($errors->has('idProductos') ? ' is-invalid' : ''), 'placeholder' => 'Idproductos']) }}
            {!! $errors->first('idProductos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idListaPrecio') }}
            {{ Form::text('idListaPrecio', $movimientosdetalle->idListaPrecio, ['class' => 'form-control' . ($errors->has('idListaPrecio') ? ' is-invalid' : ''), 'placeholder' => 'Idlistaprecio']) }}
            {!! $errors->first('idListaPrecio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FactorDescuentoLista') }}
            {{ Form::text('FactorDescuentoLista', $movimientosdetalle->FactorDescuentoLista, ['class' => 'form-control' . ($errors->has('FactorDescuentoLista') ? ' is-invalid' : ''), 'placeholder' => 'Factordescuentolista']) }}
            {!! $errors->first('FactorDescuentoLista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CantidadProductos') }}
            {{ Form::text('CantidadProductos', $movimientosdetalle->CantidadProductos, ['class' => 'form-control' . ($errors->has('CantidadProductos') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadproductos']) }}
            {!! $errors->first('CantidadProductos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescuentoAdicional') }}
            {{ Form::text('DescuentoAdicional', $movimientosdetalle->DescuentoAdicional, ['class' => 'form-control' . ($errors->has('DescuentoAdicional') ? ' is-invalid' : ''), 'placeholder' => 'Descuentoadicional']) }}
            {!! $errors->first('DescuentoAdicional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoNeto') }}
            {{ Form::text('MontoNeto', $movimientosdetalle->MontoNeto, ['class' => 'form-control' . ($errors->has('MontoNeto') ? ' is-invalid' : ''), 'placeholder' => 'Montoneto']) }}
            {!! $errors->first('MontoNeto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoImpuestos') }}
            {{ Form::text('MontoImpuestos', $movimientosdetalle->MontoImpuestos, ['class' => 'form-control' . ($errors->has('MontoImpuestos') ? ' is-invalid' : ''), 'placeholder' => 'Montoimpuestos']) }}
            {!! $errors->first('MontoImpuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoTotal') }}
            {{ Form::text('MontoTotal', $movimientosdetalle->MontoTotal, ['class' => 'form-control' . ($errors->has('MontoTotal') ? ' is-invalid' : ''), 'placeholder' => 'Montototal']) }}
            {!! $errors->first('MontoTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $movimientosdetalle->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>