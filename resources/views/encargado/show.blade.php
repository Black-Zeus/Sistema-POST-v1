@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $encargado->name ?? 'Show Encargado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Encargado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('encargados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $encargado->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $encargado->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
