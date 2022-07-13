@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $proveedore->name ?? 'Show Proveedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $proveedore->Rut }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $proveedore->RazonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrefantasia:</strong>
                            {{ $proveedore->NombreFantasia }}
                        </div>
                        <div class="form-group">
                            <strong>Idpaises:</strong>
                            {{ $proveedore->idPaises }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudades:</strong>
                            {{ $proveedore->idCiudades }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedore->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Idtiposproveedores:</strong>
                            {{ $proveedore->idTiposProveedores }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $proveedore->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection