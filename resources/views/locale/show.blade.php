@extends('layouts.app')

@section('template_title')
    {{ $locale->name ?? 'Show Locale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Locale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('locales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $locale->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $locale->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idpaises:</strong>
                            {{ $locale->idPaises }}
                        </div>
                        <div class="form-group">
                            <strong>Idciudades:</strong>
                            {{ $locale->idCiudades }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $locale->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $locale->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $locale->Fono }}
                        </div>
                        <div class="form-group">
                            <strong>Anexo:</strong>
                            {{ $locale->Anexo }}
                        </div>
                        <div class="form-group">
                            <strong>Idencargados:</strong>
                            {{ $locale->idEncargados }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $locale->idEstado }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipolocales:</strong>
                            {{ $locale->idTipoLocales }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
