@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $movimiento->name ?? 'Show Movimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $movimiento->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipomovimientos:</strong>
                            {{ $movimiento->idTipoMovimientos }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocalorigen:</strong>
                            {{ $movimiento->idLocalOrigen }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocaldestino:</strong>
                            {{ $movimiento->idLocalDestino }}
                        </div>
                        <div class="form-group">
                            <strong>Iddocumentostipo:</strong>
                            {{ $movimiento->idDocumentosTipo }}
                        </div>
                        <div class="form-group">
                            <strong>Foliodocumentos:</strong>
                            {{ $movimiento->FolioDocumentos }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadproductos:</strong>
                            {{ $movimiento->CantidadProductos }}
                        </div>
                        <div class="form-group">
                            <strong>Descuentoadicional:</strong>
                            {{ $movimiento->DescuentoAdicional }}
                        </div>
                        <div class="form-group">
                            <strong>Montoneto:</strong>
                            {{ $movimiento->MontoNeto }}
                        </div>
                        <div class="form-group">
                            <strong>Montoimpuestos:</strong>
                            {{ $movimiento->MontoImpuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Montototal:</strong>
                            {{ $movimiento->MontoTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $movimiento->idCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Idcontactos:</strong>
                            {{ $movimiento->idContactos }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $movimiento->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
