@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    {{ $listapreciodetalle->name ?? 'Show Listapreciodetalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Listapreciodetalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listapreciodetalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idlistaprecio:</strong>
                            {{ $listapreciodetalle->idListaPrecio }}
                        </div>
                        <div class="form-group">
                            <strong>Idlotes:</strong>
                            {{ $listapreciodetalle->idLotes }}
                        </div>
                        <div class="form-group">
                            <strong>Ean:</strong>
                            {{ $listapreciodetalle->Ean }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $listapreciodetalle->Monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
