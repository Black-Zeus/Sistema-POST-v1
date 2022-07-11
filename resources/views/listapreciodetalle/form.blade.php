<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idListaPrecio') }}
            {{ Form::text('idListaPrecio', $listapreciodetalle->idListaPrecio, ['class' => 'form-control' . ($errors->has('idListaPrecio') ? ' is-invalid' : ''), 'placeholder' => 'Idlistaprecio']) }}
            {!! $errors->first('idListaPrecio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idLotes') }}
            {{ Form::text('idLotes', $listapreciodetalle->idLotes, ['class' => 'form-control' . ($errors->has('idLotes') ? ' is-invalid' : ''), 'placeholder' => 'Idlotes']) }}
            {!! $errors->first('idLotes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ean') }}
            {{ Form::text('Ean', $listapreciodetalle->Ean, ['class' => 'form-control' . ($errors->has('Ean') ? ' is-invalid' : ''), 'placeholder' => 'Ean']) }}
            {!! $errors->first('Ean', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            {{ Form::text('Monto', $listapreciodetalle->Monto, ['class' => 'form-control' . ($errors->has('Monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('Monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>