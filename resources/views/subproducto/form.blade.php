<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idProductos') }}
            {{ Form::text('idProductos', $subproducto->idProductos, ['class' => 'form-control' . ($errors->has('idProductos') ? ' is-invalid' : ''), 'placeholder' => 'Idproductos']) }}
            {!! $errors->first('idProductos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $subproducto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idGrupo') }}
            {{ Form::text('idGrupo', $subproducto->idGrupo, ['class' => 'form-control' . ($errors->has('idGrupo') ? ' is-invalid' : ''), 'placeholder' => 'Idgrupo']) }}
            {!! $errors->first('idGrupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idSubGrupo') }}
            {{ Form::text('idSubGrupo', $subproducto->idSubGrupo, ['class' => 'form-control' . ($errors->has('idSubGrupo') ? ' is-invalid' : ''), 'placeholder' => 'Idsubgrupo']) }}
            {!! $errors->first('idSubGrupo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTamano') }}
            {{ Form::text('idTamano', $subproducto->idTamano, ['class' => 'form-control' . ($errors->has('idTamano') ? ' is-invalid' : ''), 'placeholder' => 'Idtamano']) }}
            {!! $errors->first('idTamano', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEstado') }}
            {{ Form::text('idEstado', $subproducto->idEstado, ['class' => 'form-control' . ($errors->has('idEstado') ? ' is-invalid' : ''), 'placeholder' => 'Idestado']) }}
            {!! $errors->first('idEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>