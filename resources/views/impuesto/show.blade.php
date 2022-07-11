@extends('layouts.app')

@section('template_title')
    {{ $impuesto->name ?? 'Show Impuesto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Impuesto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impuestos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Factorimpuesto:</strong>
                            {{ $impuesto->FactorImpuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $impuesto->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Esexento:</strong>
                            {{ $impuesto->EsExento }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $impuesto->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
