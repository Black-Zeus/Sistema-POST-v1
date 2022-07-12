@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $cajaschicasdetalle->name ?? 'Show Cajaschicasdetalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cajaschicasdetalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajaschicasdetalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcajaschicas:</strong>
                            {{ $cajaschicasdetalle->idCajasChicas }}
                        </div>
                        <div class="form-group">
                            <strong>Idaccionescajaschicas:</strong>
                            {{ $cajaschicasdetalle->idAccionesCajasChicas }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipocajaschicas:</strong>
                            {{ $cajaschicasdetalle->idTipoCajasChicas }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipomovimientoscajas:</strong>
                            {{ $cajaschicasdetalle->idTipoMovimientosCajas }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $cajaschicasdetalle->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $cajaschicasdetalle->Monto }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $cajaschicasdetalle->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocal:</strong>
                            {{ $cajaschicasdetalle->idLocal }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $cajaschicasdetalle->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
