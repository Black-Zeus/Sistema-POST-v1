@extends('layouts.app')

@section('template_title')
    {{ $subgrupo->name ?? 'Show Subgrupo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subgrupo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subgrupos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idgrupo:</strong>
                            {{ $subgrupo->idGrupo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $subgrupo->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $subgrupo->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
