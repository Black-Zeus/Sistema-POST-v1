@extends('layouts.app')

@section('template_title')
    {{ $migration->name ?? 'Show Migration' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Migration</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('migrations.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Migration:</strong>
                            {{ $migration->migration }}
                        </div>
                        <div class="form-group">
                            <strong>Batch:</strong>
                            {{ $migration->batch }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
