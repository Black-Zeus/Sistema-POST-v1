@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $caja->name ?? 'Show Caja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $caja->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $caja->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocal:</strong>
                            {{ $caja->idLocal }}
                        </div>
                        <div class="form-group">
                            <strong>Montoapertura:</strong>
                            {{ $caja->MontoApertura }}
                        </div>
                        <div class="form-group">
                            <strong>Montoventas:</strong>
                            {{ $caja->MontoVentas }}
                        </div>
                        <div class="form-group">
                            <strong>Montodevoluciones:</strong>
                            {{ $caja->MontoDevoluciones }}
                        </div>
                        <div class="form-group">
                            <strong>Montoperdidas:</strong>
                            {{ $caja->MontoPerdidas }}
                        </div>
                        <div class="form-group">
                            <strong>Montoajuste:</strong>
                            {{ $caja->MontoAjuste }}
                        </div>
                        <div class="form-group">
                            <strong>Montocajaschicas:</strong>
                            {{ $caja->MontoCajasChicas }}
                        </div>
                        <div class="form-group">
                            <strong>Montocierre:</strong>
                            {{ $caja->MontoCierre }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $caja->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
