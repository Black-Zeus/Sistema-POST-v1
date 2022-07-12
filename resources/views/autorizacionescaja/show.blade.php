@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $autorizacionescaja->name ?? 'Show Autorizacionescaja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Autorizacionescaja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autorizacionescajas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $autorizacionescaja->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Idcajaschicasdetalles:</strong>
                            {{ $autorizacionescaja->idCajasChicasDetalles }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $autorizacionescaja->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipomovimientoscajas:</strong>
                            {{ $autorizacionescaja->idTipoMovimientosCajas }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $autorizacionescaja->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
