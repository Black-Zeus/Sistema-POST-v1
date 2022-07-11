<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEmpresas') }}
            {{ Form::text('idEmpresas', $venta->idEmpresas, ['class' => 'form-control' . ($errors->has('idEmpresas') ? ' is-invalid' : ''), 'placeholder' => 'Idempresas']) }}
            {!! $errors->first('idEmpresas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLocal') }}
            {{ Form::text('idLocal', $venta->idLocal, ['class' => 'form-control' . ($errors->has('idLocal') ? ' is-invalid' : ''), 'placeholder' => 'Idlocal']) }}
            {!! $errors->first('idLocal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $venta->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMovimientos') }}
            {{ Form::text('idMovimientos', $venta->idMovimientos, ['class' => 'form-control' . ($errors->has('idMovimientos') ? ' is-invalid' : ''), 'placeholder' => 'Idmovimientos']) }}
            {!! $errors->first('idMovimientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDocumentosTipo') }}
            {{ Form::text('idDocumentosTipo', $venta->idDocumentosTipo, ['class' => 'form-control' . ($errors->has('idDocumentosTipo') ? ' is-invalid' : ''), 'placeholder' => 'Iddocumentostipo']) }}
            {!! $errors->first('idDocumentosTipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FolioDocumentos') }}
            {{ Form::text('FolioDocumentos', $venta->FolioDocumentos, ['class' => 'form-control' . ($errors->has('FolioDocumentos') ? ' is-invalid' : ''), 'placeholder' => 'Foliodocumentos']) }}
            {!! $errors->first('FolioDocumentos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCliente') }}
            {{ Form::text('idCliente', $venta->idCliente, ['class' => 'form-control' . ($errors->has('idCliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idContactos') }}
            {{ Form::text('idContactos', $venta->idContactos, ['class' => 'form-control' . ($errors->has('idContactos') ? ' is-invalid' : ''), 'placeholder' => 'Idcontactos']) }}
            {!! $errors->first('idContactos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CantidadProductos') }}
            {{ Form::text('CantidadProductos', $venta->CantidadProductos, ['class' => 'form-control' . ($errors->has('CantidadProductos') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadproductos']) }}
            {!! $errors->first('CantidadProductos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescuentoAdicional') }}
            {{ Form::text('DescuentoAdicional', $venta->DescuentoAdicional, ['class' => 'form-control' . ($errors->has('DescuentoAdicional') ? ' is-invalid' : ''), 'placeholder' => 'Descuentoadicional']) }}
            {!! $errors->first('DescuentoAdicional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoNeto') }}
            {{ Form::text('MontoNeto', $venta->MontoNeto, ['class' => 'form-control' . ($errors->has('MontoNeto') ? ' is-invalid' : ''), 'placeholder' => 'Montoneto']) }}
            {!! $errors->first('MontoNeto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoImpuestos') }}
            {{ Form::text('MontoImpuestos', $venta->MontoImpuestos, ['class' => 'form-control' . ($errors->has('MontoImpuestos') ? ' is-invalid' : ''), 'placeholder' => 'Montoimpuestos']) }}
            {!! $errors->first('MontoImpuestos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MontoTotal') }}
            {{ Form::text('MontoTotal', $venta->MontoTotal, ['class' => 'form-control' . ($errors->has('MontoTotal') ? ' is-invalid' : ''), 'placeholder' => 'Montototal']) }}
            {!! $errors->first('MontoTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $venta->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>