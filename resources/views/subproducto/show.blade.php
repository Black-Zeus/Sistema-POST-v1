@extends('layouts.app')

@section('template_title')
    {{ $subproducto->name ?? 'Show Subproducto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subproducto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subproductos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idproductos:</strong>
                            {{ $subproducto->idProductos }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $subproducto->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idgrupo:</strong>
                            {{ $subproducto->idGrupo }}
                        </div>
                        <div class="form-group">
                            <strong>Idsubgrupo:</strong>
                            {{ $subproducto->idSubGrupo }}
                        </div>
                        <div class="form-group">
                            <strong>Idtamano:</strong>
                            {{ $subproducto->idTamano }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $subproducto->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
