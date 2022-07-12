@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $contactosproveedore->name ?? 'Show Contactosproveedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contactosproveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactosproveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idproveedor:</strong>
                            {{ $contactosproveedore->idProveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Idencargados:</strong>
                            {{ $contactosproveedore->idEncargados }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contactosproveedore->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Idpaises:</strong>
                            {{ $contactosproveedore->idPaises }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudades:</strong>
                            {{ $contactosproveedore->idCiudades }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $contactosproveedore->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contactosproveedore->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $contactosproveedore->Fono }}
                        </div>
                        <div class="form-group">
                            <strong>Anexo:</strong>
                            {{ $contactosproveedore->Anexo }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $contactosproveedore->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
