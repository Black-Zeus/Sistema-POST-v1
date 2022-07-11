@extends('layouts.app')

@section('template_title')
    {{ $familia->name ?? 'Show Familia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Familia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('familias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $familia->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $familia->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
