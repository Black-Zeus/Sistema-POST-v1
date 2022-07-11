@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')])

@section('template_title')
  {{ $tipomovimientoscaja->name ?? 'Show Tipomovimientoscaja' }}
@endsection

@section('content')
  <div class="content">
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('List of Countries') }}</h4>
              <p class="card-category">{{ __('User information') }}</p>
            </div>

            <div class="card-body">

              <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $tipomovimientoscaja->Descripcion }}
              </div>
              <div class="form-group">
                <strong>Idtipocajaschicas:</strong>
                {{ $tipomovimientoscaja->idTipoCajasChicas }}
              </div>
              <div class="form-group">
                <strong>Idestado:</strong>
                {{ $tipomovimientoscaja->idEstado }}
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
