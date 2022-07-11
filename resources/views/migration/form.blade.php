<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('migration') }}
            {{ Form::text('migration', $migration->migration, ['class' => 'form-control' . ($errors->has('migration') ? ' is-invalid' : ''), 'placeholder' => 'Migration']) }}
            {!! $errors->first('migration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('batch') }}
            {{ Form::text('batch', $migration->batch, ['class' => 'form-control' . ($errors->has('batch') ? ' is-invalid' : ''), 'placeholder' => 'Batch']) }}
            {!! $errors->first('batch', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>