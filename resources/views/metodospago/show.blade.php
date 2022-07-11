@extends('layouts.app')

@section('template_title')
    {{ $metodospago->name ?? 'Show Metodospago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Metodospago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('metodospagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $metodospago->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idestado:</strong>
                            {{ $metodospago->idEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
