@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $cliente->Rut }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $cliente->RazonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrefantasia:</strong>
                            {{ $cliente->NombreFantasia }}
                        </div>
                        <div class="form-group">
                            <strong>Idpaises:</strong>
                            {{ $cliente->idPaises }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudades:</strong>
                            {{ $cliente->idCiudades }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Idclientestipos:</strong>
                            {{ $cliente->idClientesTipos }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $cliente->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
