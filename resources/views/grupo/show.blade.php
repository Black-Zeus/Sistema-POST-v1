@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $grupo->name ?? 'Show Grupo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Grupo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grupos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $grupo->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $grupo->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
