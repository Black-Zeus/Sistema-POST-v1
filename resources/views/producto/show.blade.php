@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $producto->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idfamilias:</strong>
                            {{ $producto->idFamilias }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $producto->idEstado }}
                        </div>
                        <div class="form-group">
                            <strong>Stockcritico:</strong>
                            {{ $producto->StockCritico }}
                        </div>
                        <div class="form-group">
                            <strong>Stockcomprometido:</strong>
                            {{ $producto->StockComprometido }}
                        </div>
                        <div class="form-group">
                            <strong>Idimpuestos:</strong>
                            {{ $producto->idImpuestos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
