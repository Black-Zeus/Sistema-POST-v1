<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tokenable_type') }}
            {{ Form::text('tokenable_type', $personalAccessToken->tokenable_type, ['class' => 'form-control' . ($errors->has('tokenable_type') ? ' is-invalid' : ''), 'placeholder' => 'Tokenable Type']) }}
            {!! $errors->first('tokenable_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tokenable_id') }}
            {{ Form::text('tokenable_id', $personalAccessToken->tokenable_id, ['class' => 'form-control' . ($errors->has('tokenable_id') ? ' is-invalid' : ''), 'placeholder' => 'Tokenable Id']) }}
            {!! $errors->first('tokenable_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $personalAccessToken->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('token') }}
            {{ Form::text('token', $personalAccessToken->token, ['class' => 'form-control' . ($errors->has('token') ? ' is-invalid' : ''), 'placeholder' => 'Token']) }}
            {!! $errors->first('token', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('abilities') }}
            {{ Form::text('abilities', $personalAccessToken->abilities, ['class' => 'form-control' . ($errors->has('abilities') ? ' is-invalid' : ''), 'placeholder' => 'Abilities']) }}
            {!! $errors->first('abilities', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_used_at') }}
            {{ Form::text('last_used_at', $personalAccessToken->last_used_at, ['class' => 'form-control' . ($errors->has('last_used_at') ? ' is-invalid' : ''), 'placeholder' => 'Last Used At']) }}
            {!! $errors->first('last_used_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>