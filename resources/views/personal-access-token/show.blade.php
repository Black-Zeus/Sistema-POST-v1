@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $personalAccessToken->name ?? 'Show Personal Access Token' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Personal Access Token</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal-access-tokens.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tokenable Type:</strong>
                            {{ $personalAccessToken->tokenable_type }}
                        </div>
                        <div class="form-group">
                            <strong>Tokenable Id:</strong>
                            {{ $personalAccessToken->tokenable_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $personalAccessToken->name }}
                        </div>
                        <div class="form-group">
                            <strong>Token:</strong>
                            {{ $personalAccessToken->token }}
                        </div>
                        <div class="form-group">
                            <strong>Abilities:</strong>
                            {{ $personalAccessToken->abilities }}
                        </div>
                        <div class="form-group">
                            <strong>Last Used At:</strong>
                            {{ $personalAccessToken->last_used_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
