@extends('layouts.app')

@section('template_title')
    {{ $contactoscliente->name ?? 'Show Contactoscliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contactoscliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactosclientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idclientes:</strong>
                            {{ $contactoscliente->idClientes }}
                        </div>
                        <div class="form-group">
                            <strong>Idencargados:</strong>
                            {{ $contactoscliente->idEncargados }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contactoscliente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Idpaises:</strong>
                            {{ $contactoscliente->idPaises }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudades:</strong>
                            {{ $contactoscliente->idCiudades }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $contactoscliente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contactoscliente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $contactoscliente->Fono }}
                        </div>
                        <div class="form-group">
                            <strong>Anexo:</strong>
                            {{ $contactoscliente->Anexo }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $contactoscliente->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
