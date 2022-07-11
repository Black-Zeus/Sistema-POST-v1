@extends('layouts.app')

@section('template_title')
    {{ $pagosventa->name ?? 'Show Pagosventa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pagosventa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagosventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idventas:</strong>
                            {{ $pagosventa->idVentas }}
                        </div>
                        <div class="form-group">
                            <strong>Idmetodospagos:</strong>
                            {{ $pagosventa->idMetodosPagos }}
                        </div>
                        <div class="form-group">
                            <strong>Codigoregistro:</strong>
                            {{ $pagosventa->CodigoRegistro }}
                        </div>
                        <div class="form-group">
                            <strong>Totalventas:</strong>
                            {{ $pagosventa->TotalVentas }}
                        </div>
                        <div class="form-group">
                            <strong>Montotemporal:</strong>
                            {{ $pagosventa->MontoTemporal }}
                        </div>
                        <div class="form-group">
                            <strong>Saldoventas:</strong>
                            {{ $pagosventa->SaldoVentas }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $pagosventa->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
