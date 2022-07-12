@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Create Caja
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Caja</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cajas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('caja.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
