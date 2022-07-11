<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEmpresas') }}
            {{ Form::text('idEmpresas', $movimiento->idEmpresas, ['class' => 'form-control' . ($errors->has('idEmpresas') ? ' is-invalid' : ''), 'placeholder' => 'Idempresas']) }}
            {!! $errors->first('idEmpresas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoMovimientos') }}
            {{ Form::text('idTipoMovimientos', $movimiento->idTipoMovimientos, ['class' => 'form-control' . ($errors->has('idTipoMovimientos') ? ' is-invalid' : ''), 'placeholder' => 'Idtipomovimientos']) }}
            {!! $errors->first('idTipoMovimientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocalOrigen') }}
            {{ Form::text('idLocalOrigen', $movimiento->idLocalOrigen, ['class' => 'form-control' . ($errors->has('idLocalOrigen') ? ' is-invalid' : ''), 'placeholder' => 'Idlocalorigen']) }}
            {!! $errors->first('idLocalOrigen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocalDestino') }}
            {{ Form::text('idLocalDestino', $movimiento->idLocalDestino, ['class' => 'form-control' . ($errors->has('idLocalDestino') ? ' is-invalid' : ''), 'placeholder' => 'Idlocaldestino']) }}
            {!! $errors->first('idLocalDestino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDocumentosTipo') }}
            {{ Form::text('idDocumentosTipo', $movimiento->idDocumentosTipo, ['class' => 'form-control' . ($errors->has('idDocumentosTipo') ? ' is-invalid' : ''), 'placeholder' => 'Iddocumentostipo']) }}
            {!! $errors->first('idDocumentosTipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FolioDocumentos') }}
            {{ Form::text('FolioDocumentos', $movimiento->FolioDocumentos, ['class' => 'form-control' . ($errors->has('FolioDocumentos') ? ' is-invalid' : ''), 'placeholder' => 'Foliodocumentos']) }}
            {!! $errors->first('FolioDocumentos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CantidadProductos') }}
            {{ Form::text('CantidadProductos', $movimiento->CantidadProductos, ['class' => 'form-control' . ($errors->has('CantidadProductos') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadproductos']) }}
            {!! $errors->first('CantidadProductos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescuentoAdicional') }}
            {{ Form::text('DescuentoAdicional', $movimiento->DescuentoAdicional, ['class' => 'form-control' . ($errors->has('DescuentoAdicional') ? ' is-invalid' : ''), 'placeholder' => 'Descuentoadicional']) }}
            {!! $errors->first('DescuentoAdicional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoNeto') }}
            {{ Form::text('MontoNeto', $movimiento->MontoNeto, ['class' => 'form-control' . ($errors->has('MontoNeto') ? ' is-invalid' : ''), 'placeholder' => 'Montoneto']) }}
            {!! $errors->first('MontoNeto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoImpuestos') }}
            {{ Form::text('MontoImpuestos', $movimiento->MontoImpuestos, ['class' => 'form-control' . ($errors->has('MontoImpuestos') ? ' is-invalid' : ''), 'placeholder' => 'Montoimpuestos']) }}
            {!! $errors->first('MontoImpuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoTotal') }}
            {{ Form::text('MontoTotal', $movimiento->MontoTotal, ['class' => 'form-control' . ($errors->has('MontoTotal') ? ' is-invalid' : ''), 'placeholder' => 'Montototal']) }}
            {!! $errors->first('MontoTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCliente') }}
            {{ Form::text('idCliente', $movimiento->idCliente, ['class' => 'form-control' . ($errors->has('idCliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idContactos') }}
            {{ Form::text('idContactos', $movimiento->idContactos, ['class' => 'form-control' . ($errors->has('idContactos') ? ' is-invalid' : ''), 'placeholder' => 'Idcontactos']) }}
            {!! $errors->first('idContactos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $movimiento->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>