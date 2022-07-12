@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Update Cajaschica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Cajaschica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cajaschicas.update', $cajaschica->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cajaschica.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
