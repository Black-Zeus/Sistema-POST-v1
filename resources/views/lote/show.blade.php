@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $lote->name ?? 'Show Lote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresas:</strong>
                            {{ $lote->idEmpresas }}
                        </div>
                        <div class="form-group">
                            <strong>Idsubproducto:</strong>
                            {{ $lote->idSubProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Ean:</strong>
                            {{ $lote->Ean }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $lote->Stock }}
                        </div>
                        <div class="form-group">
                            <strong>Stockcritico:</strong>
                            {{ $lote->StockCritico }}
                        </div>
                        <div class="form-group">
                            <strong>Stockcomprometido:</strong>
                            {{ $lote->StockComprometido }}
                        </div>
                        <div class="form-group">
                            <strong>Idlocal:</strong>
                            {{ $lote->idLocal }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $lote->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
