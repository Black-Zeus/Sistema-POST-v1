@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
  Create Clientestipo
@endsection

@section('content')
  <div class="content">
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">

          @includeif('partials.errors')

          <div class="card card-default">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('List of Citys') }}</h4>
              <p class="card-category">{{ __('User information') }}</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('clientestipos.store') }}"
                role="form" enctype="multipart/form-data">
                @csrf

                @include('clientestipo.form')

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
