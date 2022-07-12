@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $tamano->name ?? 'Show Tamano' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tamano</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tamanos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tamano->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tamano->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Orden:</strong>
                            {{ $tamano->Orden }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $tamano->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
