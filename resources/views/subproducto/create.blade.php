@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Create Subproducto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Subproducto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('subproductos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('subproducto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
