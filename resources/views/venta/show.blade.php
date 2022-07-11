@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $venta->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocal:</strong>
                            {{ $venta->idLocal }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $venta->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Idmovimientos:</strong>
                            {{ $venta->idMovimientos }}
                        </div>
                        <div class="form-group">
                            <strong>Iddocumentostipo:</strong>
                            {{ $venta->idDocumentosTipo }}
                        </div>
                        <div class="form-group">
                            <strong>Foliodocumentos:</strong>
                            {{ $venta->FolioDocumentos }}
                        </div>
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $venta->idCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Idcontactos:</strong>
                            {{ $venta->idContactos }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadproductos:</strong>
                            {{ $venta->CantidadProductos }}
                        </div>
                        <div class="form-group">
                            <strong>Descuentoadicional:</strong>
                            {{ $venta->DescuentoAdicional }}
                        </div>
                        <div class="form-group">
                            <strong>Montoneto:</strong>
                            {{ $venta->MontoNeto }}
                        </div>
                        <div class="form-group">
                            <strong>Montoimpuestos:</strong>
                            {{ $venta->MontoImpuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Montototal:</strong>
                            {{ $venta->MontoTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $venta->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
