@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
  Update Paise
@endsection

@section('content')
  <div class="content">
    <section class="content container-fluid">
      <div class="">
        <div class="col-md-12">

          @includeif('partials.errors')

          <div class="card card-default">
            <div class="card-header">
              <span class="card-title">Update Paise</span>
            </div>
            <div class="card-body">
              <form method="POST"
                action="{{ route('paises.update', $paise->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('paise.form')

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
