@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')])

@section('template_title')
    {{ $tipodocumento->name ?? 'Show Tipodocumento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipodocumento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipodocumentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Coddocumento:</strong>
                            {{ $tipodocumento->codDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tipodocumento->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $tipodocumento->idEstado }}
                        </div>
                        <div class="form-group">
                            <strong>Modulo:</strong>
                            {{ $tipodocumento->Modulo }}
                        </div>
                        <div class="form-group">
                            <strong>Esdte:</strong>
                            {{ $tipodocumento->EsDTE }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
