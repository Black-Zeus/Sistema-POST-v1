@extends('layouts.app')

@section('template_title')
    {{ $cajaschica->name ?? 'Show Cajaschica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cajaschica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajaschicas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $cajaschica->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $cajaschica->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocal:</strong>
                            {{ $cajaschica->idLocal }}
                        </div>
                        <div class="form-group">
                            <strong>Montoefectivo:</strong>
                            {{ $cajaschica->MontoEfectivo }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $cajaschica->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
