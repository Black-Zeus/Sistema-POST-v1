@extends('layouts.app')

@section('template_title')
    {{ $listaprecio->name ?? 'Show Listaprecio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Listaprecio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listaprecios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtipolistaprecios:</strong>
                            {{ $listaprecio->idTipoListaPrecios }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $listaprecio->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $listaprecio->FechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechatermino:</strong>
                            {{ $listaprecio->FechaTermino }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $listaprecio->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
