@extends('layouts.app')

@section('template_title')
    {{ $movimientosdetalle->name ?? 'Show Movimientosdetalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movimientosdetalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientosdetalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmovimientos:</strong>
                            {{ $movimientosdetalle->idMovimientos }}
                        </div>
                        <div class="form-group">
                            <strong>Idlotes:</strong>
                            {{ $movimientosdetalle->idLotes }}
                        </div>
                        <div class="form-group">
                            <strong>Ean:</strong>
                            {{ $movimientosdetalle->Ean }}
                        </div>
                        <div class="form-group">
                            <strong>Idproductos:</strong>
                            {{ $movimientosdetalle->idProductos }}
                        </div>
                        <div class="form-group">
                            <strong>Idlistaprecio:</strong>
                            {{ $movimientosdetalle->idListaPrecio }}
                        </div>
                        <div class="form-group">
                            <strong>Factordescuentolista:</strong>
                            {{ $movimientosdetalle->FactorDescuentoLista }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadproductos:</strong>
                            {{ $movimientosdetalle->CantidadProductos }}
                        </div>
                        <div class="form-group">
                            <strong>Descuentoadicional:</strong>
                            {{ $movimientosdetalle->DescuentoAdicional }}
                        </div>
                        <div class="form-group">
                            <strong>Montoneto:</strong>
                            {{ $movimientosdetalle->MontoNeto }}
                        </div>
                        <div class="form-group">
                            <strong>Montoimpuestos:</strong>
                            {{ $movimientosdetalle->MontoImpuestos }}
                        </div>
                        <div class="form-group">
                            <strong>Montototal:</strong>
                            {{ $movimientosdetalle->MontoTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $movimientosdetalle->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
