@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
  {{ $paise->name ?? 'Show Paise' }}
@endsection

@section('content')
  <div class="content">
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="float-left">
                <span class="card-title">Show Paise</span>
              </div>
              <div class="float-right">
                <a class="btn btn-primary" href="{{ route('paises.index') }}">
                  Back</a>
              </div>
            </div>

            <div class="card-body">

              <div class="form-group">
                <strong>Codpaises:</strong>
                {{ $paise->CodPaises }}
              </div>
              <div class="form-group">
                <strong>Nombre:</strong>
                {{ $paise->Nombre }}
              </div>
              <div class="form-group">
                <strong>Estado:</strong>
                {{ $paise->estado->Descripcion }}
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
