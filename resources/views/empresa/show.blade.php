@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $empresa->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idpaises:</strong>
                            {{ $empresa->idPaises }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudades:</strong>
                            {{ $empresa->idCiudades }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empresa->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $empresa->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $empresa->Fono }}
                        </div>
                        <div class="form-group">
                            <strong>Anexo:</strong>
                            {{ $empresa->Anexo }}
                        </div>
                        <div class="form-group">
                            <strong>Idencargados:</strong>
                            {{ $empresa->idEncargados }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $empresa->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
